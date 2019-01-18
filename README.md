# APIwithPHP
This is a simple api developed with php that creates and display uploaded user location.

##Getting Started
To clone this project,

open your terminal or cmd or powershell
change directory into the folder in which you want to clone the project to preferably in the htdocs folder in your xmapp or public in your local webserver directory.

```
cd folder/to/clone-into/  
eg. (cd ../../xampp/htdocs/)
```

then type the following command
```
git clone https://github.com/RegNex/APIwithPHP.git
```
then code in VScode with,
```
code .
```
or open in any other text-editor of your choice.

###How to Run
* start your apache and mySql service.

goto,
```
localhost/phpmyadmin
```
select Import and navigate to your API folder under htdocs and locate and open 'db_file' folder then click Open to import the .sql file inside. OR REFER TO THIS ARTICLE

[EXPORT AND IMPORT MYSQL DATABASES](https://mediatemple.net/community/products/dv/204403864/export-and-import-mysql-databases)

* then, open POSTMAN (download here if you dont have it already installed https://www.getpostman.com/)

type in this URL to read data
```
localhost/location_api/reader.php
```

* To Insert new data
```
localhost/location_api/create.php?latlng=0.123466789,0.987456321
```

##To Contribute to this little project,
* clone the project
* implement your changes
* push to branch 'test'
* make a pull request


## Author

* **Sunu Bright Etornam** 
[Twitter](https://twitter.com/_regnex)
[Facebook](https://www.facebook.com/RegNex)


## License

Copywrite 2018 Sunu Bright Etornam

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.