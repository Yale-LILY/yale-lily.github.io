---
layout: page
title: Publications
permalink: /publications/
---

<table>
{% for paper in site.data.papers.papers %}


  <tr><td style="padding:10px">
{% if paper.image %}<img width="250px" src="{{paper.image}}"> {% endif %}
</td><td style="padding:10px">
<a class="paper" href="{{paper.pdf}}">
{{paper.title}}
</a><br>
{{paper.authors}}<br>
{{paper.conference}} <br>

{% if paper.pdf %}<a class="btn btn-labeled btn-primary" href="{{paper.pdf}}">PDF</a>{% endif %}
{% if paper.bibtex %}<a class="btn btn-labeled btn-primary" href="{{paper.bibtex}}">BibTex</a>{% endif %}
{% if paper.code %} <a class="icon slides label label-success label-warning" href="{{paper.code}}">code</a>{% endif %}
<br>

</td></tr>

{% endfor %}
</table>


