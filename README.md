itworks
=======
an easy localhost launcher :)

![](http://wearezaion.com/img/screen3.png)

It works! is a simple php file (with his small folder dependency) for a cool Directory Listings in your localhost url.



### Installation:

Copy the source ('index.php' and the folder '__sources') in your localhost root directory [set to 777].

***

### How it works:

![](http://wearezaion.com/img/screen4.png)

Inside your project folder create a .json file called 'itworks.json' (view the default file in repo):

  `{
 	"desc": "project description",
 	"thumb": 1,
 	"url": "customurl.dev",
 	"hide": false
   }`

- [desc] = Your project description (string);

          `null = localhost project;`

- [thumb] = the thumbnail color (number):

          `null = default grey thumb;`
          `1 = yellow thumb;`
          `2 = green thumb;`
          `3 = orange thumb;`
          `4 = blue thumb;`

- [url] = if project have a custom url set in virtualhost (string):

          `null = folder name;`

- [hide] = if set on true the project folder not showing in list (true | false):

          `null = false;`
          
An easy project made by Mirko Saugo [@wearezaion](http://wearezaion.com)