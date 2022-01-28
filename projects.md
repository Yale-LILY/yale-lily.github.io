---
layout: page
title: Projects
permalink: /projects/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Projects</h2>
  </header> 

<div class = "row">
<div class = "">
<p align="left"> <div class="left"> The LILY lab is currently focusing on seven major projects:  </div>  </p>
</div>
</div>


<table>
{% for project in site.data.projects.major-projects %}
<tr><td style="padding:10px">
{% if project.image %}<img width="250px" src="{{project.image}}"> {% endif %}
</td><td style="padding:10px">
<a class="paper" href="{{project.link}}">
{{project.title}}
</a>
</td></tr>
{% endfor %}
</table>


<div class = "row">
<div class = "">
<p align="left"> <div class="left"> The following pages contain project reports from independent research course projects pertaining to the above projects or related areas: </div>  </p>
</div>
</div>

<table>
{% for term in site.data.projects.terms %}
<tr>
<td style="padding:10px">
<a class="paper" href="{{term.link}}">
{{term.term}}
</a>
</td></tr>
{% endfor %}
</table>
