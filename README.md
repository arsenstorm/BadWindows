# BadWindows

BadWindows, is the PHP version of [SharpLocker](https://github.com/Pickfordmatt/SharpLocker).  
It was created for educational purposes to show that even a web attack implemented correctly can still grab passwords.

Passwords entered into the form are sent to a request bin --> [requestbin.net](http://requestbin.net)  
And therefore, can be accessed remotely.

## Important

As of 20/10/2022, BadWindows is only supported on Windows 10.

If you would like to contribute to add support for other versions of Windows, please read the [CONTRIBUTING.md](https://github.com/arsenstorm/BadWindows/blob/main/CONTRIBUTING.md) file.

## Requests
Requests must be sent to a server.  
This can be done by using a GET Request:

example.com?request=action

### Possible Requests:

Type --> password/pin  
--> Type of data you are trying to access  
> Syntax --> ?type=pin
> Syntax --> ?type=password

Name --> Individuals Username
--> Used for stronger attacks
> Syntax --> ?name=

Background --> Background Image to use
--> Makes it look more realistic
> Syntax --> ?background=../i/windows/default.jpg

Profile --> Profile Image to use
--> Makes it look more realistic
> Syntax --> ?profile=../i/user.png

Request Bin --> Custom Request Bin to use
--> Sends data to this request bin
> Syntax --> ?requestbin=YourCustomRequestBinID

Mail --> Email Address to use
--> Includes a specified email address
> Syntax --> ?mail=user@example.com

Return URL --> Website URL
--> Returns the user to a specified URL after password input
> Syntax --> ?return=http://example.com

OS --> Operating System
--> Operating System to impersonate (Only supports Windows 10)
> Syntax --> ?os=windows10

Text --> Text Colour
--> What colour text to use (Black or White is recommended)
> Syntax --> ?text=white
> Syntax --> ?text=black

Domain --> Domain
--> What domain to use
> Syntax --> ?domain=EXAMPLE

**Copyright © 2022 arsenstorm**
