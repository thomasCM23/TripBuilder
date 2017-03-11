# Trip Builder API
This was a coding test from Momentum Ventures, it is a simple api where users can search for airports and flights and add trips to there catalog.
---
# Technologies used
- [Laravel](https://laravel.com/) as the mvc framework that this api is based on
- [MySQL](https://www.mysql.com/) that database used for local and RDS
- [Elastic BeanStalk](https://aws.amazon.com/elasticbeanstalk/?sc_channel=PS&sc_campaign=acquisition_CA&sc_publisher=google&sc_medium=beanstalk_b&sc_content=elastic_beanstalk_e&sc_detail=elastic%20beanstalk&sc_category=beanstalk&sc_segment=161187838783&sc_matchtype=e&sc_country=CA&s_kwcid=AL!4422!3!161187838783!e!!g!!elastic%20beanstalk&ef_id=WGQD1AAABCOR08Wm:20170311165420:s) and [RDS](https://aws.amazon.com/rds/?sc_channel=PS&sc_campaign=acquisition_CA&sc_publisher=google&sc_medium=rds_b&sc_content=rds_bmm&sc_detail=%2Baws%20%2Brds&sc_category=rds&sc_segment=145412302946&sc_matchtype=b&sc_country=CA&s_kwcid=AL!4422!3!145412302946!b!!g!!%2Baws%20%2Brds&ef_id=WGQD1AAABCOR08Wm:20170311165432:s) used for public deployment on aws
- [Visual Studio Code](https://code.visualstudio.com/)
---
# Running the API
## Locally
### Using Artisan
1. Download Code
2. Navigate into root of project using the terminal.
3. Create a local MySQL DB called ```tripbuilder``` with terminal or with MySQL workbench.
4. Run ```php artisan migrate``` this will create the tables.
5. Locate the file called ```airport.sql``` and run it on the database you created earlier this will populate a list of airports.
6. Run ```php artisan db:seed``` this will populate information for the flights tables.
7. Run ```php artisan serve``` this will start the application.
