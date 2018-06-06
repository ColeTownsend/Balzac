# Balzac

Balzac is a simple, beautiful theme for Anchor. Free to all, just attribute where appropriate.

It is fluid & responsive theme. It's gloriously beautiful and suited to long form. Built on a SCSS foundation, it's pretty organized (not perfect, still cleaning it up a bit). 

This is built on Semantic.gs grid framework which I edited a bit to make it fluid. It utilized much of the PHP from my own blog, which forked and customized the PHP from Zleek (Josh Kennedy). 

You can now also dictate the color of the nav links just like in the Jekyll version! By creating a text variable for both your pages and articles, you can denote "darken" to darken the navigation links up top.*

If you feel like donating — [Give it a thought.](http://gtat.me/balzac/donate)

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

(Featured images do not show up on the Posts 'list' page, which is the initial page generated after installation.)

##### Create **custom field** in **articles** for feature image
* extend > custom fields > create new field
* type: post
* field: file
* unique key: featured-image
* Label: Featured Image (or hero, or whatever, this is just for the back end form label.)
* File types: (leave blank, unless you want to limit it to jpg, png, etc.)


#### *To darken the header on pages and articles, make sure to put "darken" in your Header Style field.


For reference:

![Balzac for Anchor Admin Area](https://i.cloudup.com/3NQkYGoBXJ-1200x1200.png)


![Balzac for Anchor Admin Area](https://i.cloudup.com/YhdkZuzcpu-2000x2000.png)


![Balzac for Anchor Custom Field](https://i.cloudup.com/sdBInimY6o-3000x3000.png)






## Thanks!

If you're feeling generous and really like this, donate some coffee money via [Gumroad](https://gumroad.com/l/balzac).

If you'd like give me credit somewhere on your blog or tweet a shout out to
[@ctrunsthis](https://twitter.com/ctrunsthis), that would be pretty sweet. 

## License

This is under the [GPL](http://choosealicense.com/licenses/gpl-v2/) with no added caveats, so feel free to use this Anchor theme on your site without linking back to me or using a disclaimer. Basically you must make your source code equally available to others.





