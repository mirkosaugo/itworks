itworks
=======
an easy localhost launcher :)

![](http://wearezaion.com/img/screen3.png)

It works! is a simple php file (with his small folder dependency) for a cool Directory Listings in your localhost url.



### Installation:

Copy the source ('index.php' and the folder '__sources') in your localhost root directory.

***

### How it works:

![](http://wearezaion.com/img/screen4.png)

Inside your project folder create a .json file called 'itworks.json' (view the default file in repo):

  `{
 	"desc": "project description",
 	"thumb": 1,
 	"url": "customurl.dev"
   }`

- [desc] = Your project description;

          `null = localhost project;`

- [thumb] = the thumbnail color:

          `null = default grey thumb;`
          `1 = yellow thumb;`
          `2 = green thumb;`
          `3 = orange thumb;`
          `4 = blue thumb;`

- [url] = if project have a custom url set in virtualhost (example.dev):

          `null = folder name;`
          
An easy project made by Mirko Saugo [@wearezaion](http://wearezaion.com)