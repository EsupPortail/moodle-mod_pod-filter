# Moodle - Filter Pod
This is the version Beta 0.1 of moodle-mod_pod-filter. That means that this version is still in development and you might encounter bugs or issues that will not be present in the final version. 

Add a filter for urls of videos from pod and convert them to iframe to simplify the integration of videos in courses.

## Description
Pod is a video sharing platform. with the mod link that points to Pod video content are converted to a embed code. Here is a list of the types of link that can be converted :

```
https://pod.univ.fr/video/test_video/
```
A basic link
```
<a href="https://pod.univ.fr/video/test_video/"></a>
```
A link type href ('Insert media -> link' or 'Link' in the text editor)
```
<video><source src="https://pod.univ.fr/video/test_video"></video>
```
A video link with 'insert media -> video' in the text editor)

All this links are converted into :
```html
<iframe src="//pod.univ.fr/video/test_video/?is_iframe=true" size="240" width="640" height="360" style="padding: 0; margin: 0; border:0" allowfullscreen ></iframe>
```

## Install
To install the mod follow these steps :
* Have Moodle installed in version 3.1 or higher
* Download the mod as a Zip from this github repository.
* Move the .zip archive to your 'filter' dir of your Moodle (Default path on Linux : /var/www/moodle/filter, on Widows : C:\server\moodle\filter)
* Extract the archive. You should now have a folder named 'pod'.
* Go to your moodle homepage and log into as a administrator.
* Your moodle will automatically detect the new module. Follow the steps that will be shown.
* Go to 'Site administration' -> 'Plugins' -> 'Filters' -> 'Manage filters'.
* Find 'Pod' and change the 'Disabled' option to 'On'.
* You can configure the filter if you want (url to Pod site, quality by default of the video embedded, width and height of the iframe)
* Now you can use the new filter.

## Uninstall
To uninstall the mod follow these steps :
* Log into your moodle as a administrator.
* Go to 'Site administration' -> 'Plugins' -> 'Filters' -> 'Manage filters'.
* Find 'Pod' and click on 'Uninstall'. Follow the instructions.
* The mod is now uninstalled.

## Contributing
You are authorized to contribute to the development of this mod :
* Testing and creating issues. 
* Submitting code through Pull Requests. Only two restriction :

  1. Make a branch for the modifications and name it as follows : <_github_account_>/feature_<_name_of_feature_>. If this is a bug fix : <_github_account_>/bugfix_<_name_of_bugfix_>.
  
  2. The branch must be made from the 'dev' branch.
