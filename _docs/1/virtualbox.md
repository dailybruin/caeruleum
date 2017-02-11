---
title: VirtualBox
category: Setting Up
order: 1
---

[Link][1] to server file.

For Windows and Macs:
1. Download [VirtualBox][2]. (Any version above 4 is fine!)
2. Open Virtual Box and in the top left hand corner select File -\> Import Appliance

![][image-1]

3. Open the folder icon and include the “Daily Bruin Training Fall 2013 (server).ova” and create your virtual machine, using the default settings. (If you need this file, message one of the editors)
4. Now run the virtual machine by selecting it and clicking the start button, it will prompt this screen

![][image-2]

5. The login is dailybruin and password is bruin111 (you actually wont need to log into the virtual machine, because you shouldn’t be making changes to the code through virtual box!)
6. Now that the virtual machine has started, this creates a local Daily Bruin server on your own computer (nobody else can see it, so you are free to make whatever changes you want).

The site is at [http://localhost:8080/][3], admin page can be accessed through [http://localhost:8080/wp-admin][4].

### SSH information:

If you don’t want to make changes using Virtual Box, you will have to ssh into the server.
> What is ssh? [SSH][5] stands for “Secure SHell” and is basically just a way for you to login into a computer remotely. In this case, we’re logging into your virtual machine (which emulates the DB server) from your computer.

`ssh -p 8022 dailybruin@127.0.0.1`

In VirtualBox, select the Daily Bruin machine. Now in the top bar, click “Machine” then select the option “Network” then in the network tab, click the “Advanced.” Click the “Port Forwarding” button on the bottom. This will give you a screen with these numbers (In the future, if the server is edited, these numbers may have changed.)

![][image-3]

This SSH information is what you will use (Specifically note down the “Host Port” section).

### Editing Caeruleum

Make sure you git pull to get the most recent version of Caeruleum.

The code for the main site can be found in the folder: `~/wordpress/wp-content/themes/caeruleum.`

Also change the git credentials using the command, by default they are for a guy called Neil Bedi, so if you push changes, you will do it in his name
`$ git config --global user.name YOUR_NAME`  
`$ git config --global user.email YOUR_EMAIL`

NOTE: If you want to make updates to main site code, make sure you checkout your own branch for development and don’t develop on the master branch.

#### Making edits in Windows

For windows there is something called MobaXterm which is cool so you should download it. You will use this to ssh into the server.

In the top left hand corner, create a new session. Then fill in the following information for the SSH session:

![][image-4]

(The port may be different if the server has changed, information on how to find it can be found in “SSH information”). The password to log in with is bruin111. The code for the main site can be found in the folder: `~/wordpress/wp-content/themes/caeruleum`.

Make sure you git pull to get the most recent version of caeruleum.


#### Making edits on Mac

##### Setting up SFTP in SublimeText
1. Download SublimeText : http://www.sublimetext.com/2
2. Install: https://packagecontrol.io/installation
3. Restart SublimeText
4. Open SublimeText
5. Preferences \> Package Control \> Type: Install Package \> Hit Enter
6. Search: “SFTP” \> Select the first package: “Sublime SFTP”. Download.
7. Go into a local directory and clone the repo for Caeruleum (`git clone https://github.com/daily-bruin/caeruleum`)
8. Open the folder in SublimeText
9. Right click on “Caeruleumr”; select SFTP/FTP \> Sync Local -\> Remote  

##### Setting up SFTP in Atom
1. Download Atom : https://atom.io
2. Install the remote-ftp package for atom: https://atom.io/packages/remote-ftp
3. Go into a local directory and clone the repo for Caeruleum (` git clone https://github.com/daily-bruin/caeruleum `)
4. Open the folder in Atom
5. Add [this][6] file to the caeruleum folder
6. “Packages” -\> “Remote-FTP” -\> “Connect”
7. You should be good!  



[1]:	https://drive.google.com/file/d/0B0rqan9NKaMNV05RSnAzWjNyZ2M/view?ts=5833e57b
[2]:	https://www.virtualbox.org/wiki/Downloads
[3]:	http://localhost:8080/
[4]:	http://localhost:8080/wp-admin
[5]:	https://en.wikipedia.org/wiki/Secure_Shell
[6]:	https://gist.github.com/nathunsmitty/c9cee6e86f427e12218109c96a5b0886

[image-1]:	/images/vmsetup00.png
[image-2]:	/images/vmsetup01.png
[image-3]:	/images/vmsetup02.png
[image-4]:	/images/vmsetup03.png