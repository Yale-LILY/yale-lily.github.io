---
layout: page
title: News
permalink: /news/
---


  <header class="post-header">
    <h2 class="post-title">News and Events</h2>
  </header> 

{% for term in site.data.events %}
<div class ="row">

<div style="text-align:center">
<h3>{{term.term}}</h3>
</div>
</div>

<table class="table table-striped table-hover">
<tr>
    <th> Date</th> <th> Talk</th> <th> Location </th>
</tr>
{% for event in term.events %}
    <tr>
        <td> {{ event.date }}  </td>
        <td> 
        {% if event.website %}
           <a href="{{event.event_website}}">{{event.type}}</a> by <a href="{{event.website}}"> {{event.presenter}}</a>
        {% else %}
           <a href="{{event.event_website}}">{{event.type}}</a> by {{event.presenter}} 
        {% endif %}
        </td>
        <td> {{event.location}} </td>
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



