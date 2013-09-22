Codeception Testing
===================
We are never too senior or too old to learn new ways of doing things.  Just because you did something a certain way,
does not make it the best and only way (or the right one).

When I started doing QA, I was completely lost.  Followed some examples here and there and eventually got some tests 
running and expanded my knowledge from there.

Quite recently it was decided/prefered that my tests have to move to PHP (from RoR with Rspec and Watir). 
So I found myself lost again...  I tried following samples, but (yes they did work... locally) none of them 
explained how to setup from start to end.... code sample, Selenium setup, and even Jenkins CI integration.


This is what I have done get some tests running...
--------------------------------------------------
I am running Ubuntu develment environment, so to get some tests running for internet explorer was not just running 
a test on my local machine...

You can have this sample test running in a few short minutes:  Just follow these steps...
1. Download and place selenuim stand alone server on your windows box in a folder you can acces later. (I've tested it on XP and WIN7 for IE 7,8,9,10).
2. Download IEdriver.exe (32bit versoin, as I had speed issues with 64 bit) and place it the same folder (only for ease of use, can be different folders).

On your windows box make sure of the following:
1. Protected mode setting is the same for all the zones (Internet, Intranet, Trusted sites and rewstrickted sites)
2. The browser's zoom is set to 100% (took a while to figure this out!!)
3. 

