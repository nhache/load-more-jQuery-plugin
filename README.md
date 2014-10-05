load-more-jQuery-plugin
=======================
Allows to subsequently load results (e.g. block posts).

Adding jQuery and the plugin
----------------------------
Add jQuery (e.g. via Google APIs) and the plugin just before the closing body tag.
```html
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/load-more.js"></script>
```
Calling the plugin
------------------
The plugin allows to specify how many new results should be loaded (default is four). You can access this option via the "count" property. In the following example, the next six results will be loaded from our database.
```html
<script type="text/javascript">
  $('.pager li').loadMore({count: 4});
</script>
```


