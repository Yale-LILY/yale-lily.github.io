---
layout: page
title: Events
permalink: /events/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
<!--  <header class="post-header">
    <h2 class="post-title">News and Events</h2>
  </header> -->

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
           <a href="{{event.event_website}}">{{event.type}}</a> 
        {% else %}
           <a href="{{event.event_website}}">{{event.type}}</a>  
        {% endif %}
        {% if event.presenter %}
            by <a href="{{event.website}}"> {{event.presenter}}</a>
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



