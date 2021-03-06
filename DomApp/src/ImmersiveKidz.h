#ifndef IMMERSIVEKIDS_H
#define IMMERSIVEKIDS_H

#include <iostream>
#include <vector>
#include <set>
#include <algorithm>
#include "sgct.h"
#include "DrawableObject.h"
#include "Illustration.h"
#include "Camera.h"
#include "HUD.h"
#include "SceneLoader.h"


/**
* @brief  	The ImmersiveKidz engine
*
* @details	The engine class that controls the ImmersiveKidz application. Only 
*			allow one instance called from the sgct main class.
*
* @author 	Jonas Strandstedt, jonst184@student.liu.se
* @author	Viktor Nilsson, vikni067@student.liu.se
* @author   Karl Gyllensten, kargy291@student.liu.se
* @date   	November 1, 2012
* @version	0.0.1
*    
*/
class ImmersiveKidz 
{
public:
	
	~ImmersiveKidz();
	
	void init();

	void setMaster(bool m);
	void setScenePath(std::string folder);
	void setSceneLoaded(bool isLoaded);
	void addDrawableObject(DrawableObject *o, std::string f = "none", double animoffset = 0.0, double animparam = 0.0);
	bool loadTexture(std::string texture);
	void initObjects();

	void preSyncFunc();
	void draw();
	void encode();
	void decode();
	void postSyncPreDrawFunction();

	void mouseMotion(int x,int y,int dx,int dy);
	void mouseButton(int button,int state);
	void keyboardButton(int key,int state);

	Camera* getCamera();
	HUD* getHUD();
	static ImmersiveKidz* getInstance();
	
	std::string getScenePath() { return _scenePath; };
	
	void setWorldRect(glm::vec4 rec);
	glm::vec4 getWorldRect();
	void reset();
private:
	static ImmersiveKidz* _instance;
	ImmersiveKidz();
	
	// all objects in the scene that can be drawn
	std::vector< DrawableObject* > _objects;
	std::vector< Illustration* > _illustrations;
	std::set< std::string > _textures;

	// instance variables
	HUD	*_hud;

	bool _isMaster;
	std::string _scenePath;		// set in constructor
	bool _sceneLoaded;
	

	// time and dynamic variables
	double _currTime;
	double _dt;

	// handlers
	SceneLoader _loader;
	Camera *_camera;

	glm::vec4 _worldRect;

};


#endif