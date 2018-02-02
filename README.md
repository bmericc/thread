class Thread   

version: 1.0	

by:Alex Lau

email:alex621@gmail.com

If you have any questions, feel free to ask me.



In this class, there are six properties

	var $func;  //The function name that you want to call
	var $arg;	//The arguments you want to pass in
	var $thisFileName; //This file's name
	var $fp;	//File pointer
	var $host;	//Host
	var $port;	//Port

And there are four methods,

	void Thread(string $host, [int $port = 80]) // constructor
	void setFunc(string $func,array $arg) 

		$func is a string of the function name
		$arg is an array of the arguments

			Usage:

				$arg = array ( 2, 3);

				$func = "test";

				The method will call test(2,3).

	void start()				  To start the thread

	mixed getreturn()			  To get the return value from the function that called by setFunc

	void setPort()				  To set the port

	void setHost()				  To set the host



Since serialize() does not support the resource type, this class cannot be used to pass in or return the resource type.
