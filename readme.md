# Balzac

Balzac is a simple, beautiful theme for Anchor. Free to all, just attribute where appropriate.

It is fluid & responsive theme. It's gloriously beautiful and suited to long form. Built on a SCSS foundation, it's pretty organized (not perfect, still cleaning it up a bit). 

This is built on Semantic.gs grid framework which I edited a bit to make it fluid. It utilized much of the PHP from my own blog, which forked and customized the PHP from Zleek (Josh Kennedy). 

# Instructions

#### Easy Stuff
* copy the folder "balzac" over to your themes folder


#### Variables
* create **site variables** for social accounts
* extend > site variables > create new variable for each listed: below
* dribbble-account
* email-account
* twitter-account (don't need an @, just the username)


#### Custom Fields

##### Create **custom field** in **pages** for feature image
* extend > custom fields > create new field
* type: page
* field: file
* unique key: featured-image
* Label: Featured Image (or hero, or whatever, this is just for the back end form label.)
* File types: (leave blank, unless you want to limit it to jpg, png, etc.)

##### Create **custom field** in **articles** for feature image
* extend > custom fields > create new field
* type: post
* field: file
* unique key: featured-image
* Label: Featured Image (or hero, or whatever, this is just for the back end form label.)
* File types: (leave blank, unless you want to limit it to jpg, png, etc.)

