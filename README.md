# Lebanese Areas
no developer need to suffer again and again in re-creating Lebanese Areas from Government to district to Area(city,town). 
This is a  jQuery plugin that can be hooked on any platform. also a plugin dedicated for WordPress.

## Demo
A video will come soon

## How to use outside Wordpress
1. download or clone the repository
2. open the standalone folder
3. copy the lebaneseareas.min.js file and paste it on your (assets/js) folder as example on your production site
4. edit demo.html and check the documentation on how to implement.

```
<!-- you need to have 3 select fields with these classes -->
<!-- lebgov for governent selection -->
<select class="lebgov"></select><br/><br/>
<!-- lebdist for district selection -->
<select class="lebdist"></select><br/><br/>
<!-- lebarea for areas, city town selection -->
<select class="lebarea"></select>
<!-- support for legacy jquery 1.4 till latest jquery 3.4.1 -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<!-- calling the minified version -->
<script  src="lebaneseareas.min.js"></script>

```


## how to use it as wordpress plugin
1. upload the lebaneseareas.zip file into the plugin
2. activate the plugin.
3. you can use it on the front end by adding the following select fields

```
<!-- lebgov for governent selection -->
<select class="lebgov"></select><br/><br/>
<!-- lebdist for district selection -->
<select class="lebdist"></select><br/><br/>
<!-- lebarea for areas, city town selection -->
<select class="lebarea"></select>

```
PS: note that once you only put these classes on a select input field, whatever the ID, Name, Form (contact form 7) or regular html form, on any type of dynamic fomrs, will work with no issues.