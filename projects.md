---
layout: page
title: Projects
permalink: /projects/
---

  <header class="post-header">
    <h2 class="post-title">Projects</h2>
  </header> 

{% for term in site.data.projects %}
<div class ="row">

<div style="text-align:center">
<h3>{{term.term}}</h3>
</div>
</div>


<table>
{% for project in term.projects %}


  <tr><td style="padding:10px">
{% if project.image %}
<img width="300px" src="{{project.image}}"> {% endif %}
</td><td style="padding:10px">
<a class="paper" href="{{project.project_website}}">
{{project.topic}}
</a><br>
{{project.members}}<br>

{% if project.project_website %}<a class="btn btn-labeled btn-primary" href="{{project.project_website}}">Poster</a>{% endif %}
{% if project.dataset %}<a class="btn btn-labeled btn-primary" href="{{project.dataset}}">Dataset</a>{% endif %}
{% if project.paper %}<a class="btn btn-labeled btn-primary" href="{{project.paper}}">Paper</a>{% endif %}
{% if project.code %} <a class="icon slides label label-success label-warning" href="{{project.code}}">code</a>{% endif %}
<br>

</td></tr>

{% endfor %}
</table>

{% endfor %}

