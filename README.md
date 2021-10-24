# framework-joss
This framework is proposal that suppose to work on my company that I am working, because we have legacy apps and still using PHP5 without framework, so I think I will make some standard here and change the workflow to better one. I will personally maintaining this framework for my company, if anyone want to fork this, create issues you are welcome to do so.
We are working using PHP5 and without framework, creating no standard in coding new module or creating new app. We also mainly working using database oracle, but this framework I am going to make it work with mysql and oracle because because i want to make this is easier to develop locally and to push it to server. Right now we usually develop directly in server production with remote desktop, this makes it harder to trace error and prossibly creating problem in production server, this is why I want to change standard here to be more standarize like other company (develop locally and push to production) to make it easier for outside developer develop here and start changing remote desktop workflow that currently we are using.
I know this is old workflow but before i got here we are even using PHP4 before, since PHP7.4 release if I'm not mistaken server often crash without any error or warning just not responding without explaination (at least what my boss told me). I am glad we are moving to PHP5. I hope I can maintain this with at the very least support for PHP5.3 since that is where i started programming.

# TODO
- make custom routing
- controller
- connect db mysql
- connect db oracle
- model
- group routing
- middleware
- registering library from composer
