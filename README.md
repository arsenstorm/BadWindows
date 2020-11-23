# BadWindows

BadWindows, is the PHP version of [SharpLocker](https://github.com/Pickfordmatt/SharpLocker).  
It was created for educational purposes to show that even a web attack implemented correctly can still grab passwords.

Passwords entered into the form are sent to a request bin --> [requestbin.net](http://requestbin.net)  
And therefore, can be accessed remotely.

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

There is more to come...

## Examples  

**WARNING: DO NOT ENTER YOUR OWN PASSWORD**  
**EVERYONE WILL BE ABLE TO SEE IT**

Want to see the requestbin?  
Click [Here](http://requestbin.net/r/sqsblmsq?inspect)

### Password Example  
https://badwindows.rf.gd/client?name=User&type=password&text=white&os=windows10&return=https://github.com/agentnooby/BadWindows&profile=../i/user.png&background=../i/windows/default.jpg&requestbin=sqsblmsq

### PIN Example  
https://badwindows.rf.gd/client?name=User&type=pin&text=white&os=windows10&return=https://github.com/agentnooby/BadWindows&profile=../i/user.png&background=../i/windows/default.jpg&requestbin=sqsblmsq

**Copyright (c) 2020 agentnooby**
