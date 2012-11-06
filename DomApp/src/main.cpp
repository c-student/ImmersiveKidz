#include "sgct.h"
#include "ImmersiveKidz.h"

sgct::Engine * gEngine;
ImmersiveKidz *iKidz;

void myInitOGLFun();
void myDrawFun();
void myPreSyncFun();
void myEncodeFun();
void myDecodeFun();

int main( int argc, char* argv[] )
{
	// Allocate
	gEngine = new sgct::Engine( argc, argv );
	glfwOpenWindowHint(GLFW_FSAA_SAMPLES, 4);

	// Bind your functions
	gEngine->setInitOGLFunction( myInitOGLFun );
	gEngine->setDrawFunction( myDrawFun );
	gEngine->setPreSyncFunction( myPreSyncFun );

	// Init the engine
	if( !gEngine->init() )
	{
		delete gEngine;
		return EXIT_FAILURE;
	}
	
	// set encode and decode (after init to prevent segmentationfault from decode function)
	sgct::SharedData::Instance()->setEncodeFunction(myEncodeFun);
	sgct::SharedData::Instance()->setDecodeFunction(myDecodeFun);

	// Main loop
	gEngine->render();

	// Clean up (de-allocate)
	delete iKidz;
	sgct::TextureManager::Destroy();
	delete gEngine;

	// Exit program
	exit( EXIT_SUCCESS );
}

void myInitOGLFun() {
	// Allocate and initialize ImmersiveKidz
	iKidz = new ImmersiveKidz();
	iKidz->setMaster(gEngine->isMaster());
	
	iKidz->loadScene("world1");

	//glCullFace(GL_BACK);
	//glFrontFace(GL_CW); //our polygon winding is counter clockwise
	//glEnable(GL_CULL_FACE);
	glEnable(GL_TEXTURE_2D);
	glEnable(GL_DEPTH_TEST);
}


void myDrawFun()
{
	iKidz->draw();
}

void myPreSyncFun()
{
	iKidz->preSyncFunc();
}

void myEncodeFun()
{
	iKidz->encode();
}

void myDecodeFun()
{
	iKidz->decode();
}