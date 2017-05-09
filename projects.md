---
layout: page
title: Projects
permalink: /projects/
---


  <header class="post-header">
    <h2 class="post-title">Projects at LILY</h2>
  </header> 

{% for term in site.data.projects %}
<div class ="row">

<div style="text-align:center">
<h3>Projects in {{term.term}}</h3>
</div>
</div>

<table class="table table-striped table-hover">
<tr>
    <th> Topic </th> <th> Members </th>
</tr>
{% for project in term.projects %}
    <tr>
        <td> 
        {% if project.project_website %}
           <a href="{{project.project_website}}">{{project.topic}}</a>
        {% else %}
           {{project.topic}}
        {% endif %}
        </td>
        <td> {{project.members}} </td>
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



