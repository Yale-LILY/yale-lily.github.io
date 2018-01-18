---
layout: page
permalink: /projects_f2017/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Fall 2017</h2>
  </header> 

<table>
{% for project in site.data.projects_f2017.projects %}

  <tr><td style="padding:10px">
{% if project.image %}
<img width="200px" src="{{project.image}}"> 
{% endif %}
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


