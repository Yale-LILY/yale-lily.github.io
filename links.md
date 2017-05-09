---
layout: page
title: Links
permalink: /links/
---


  <header class="post-header">
    <h2 class="post-title">Useful Links</h2>
  </header> 

{% for link in site.data.links %}
<div class ="row">

<div style="text-align:center">
<h3>{{link.group}}</h3>
</div>
</div>

<table class="table table-striped table-hover">
<tr>
    <th> Name </th> <th> Description </th> 
</tr>
{% for link in link.links %}
    <tr>
        <td> 
           <a href="{{link.url}}">{{link.name}}</a> 
        </td>
        <td> {{ link.description }}  </td>
    </tr>
{% endfor %}
</table>
{% endfor %}

<style>
#pubTable_filter{
    display:none;
}
</style>

<table id="pubTable" class="table table-hover"></table>



