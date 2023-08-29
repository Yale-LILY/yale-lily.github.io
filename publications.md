---
layout: page
title: Publications
permalink: /publications/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Publications</h2>
  </header> 

<table>
{% for paper in site.data.papers.papers %}


  <tr><td style="padding:10px">
{% if paper.image %}<img width="1000px" src="{{paper.image}}"> {% endif %}
</td><td style="padding:10px">
<a class="paper" href="{{paper.pdf}}">
{{paper.title}}
</a><br>
{{paper.authors}}<br>
{{paper.conference}} <br>

{% if paper.pdf %}<a class="btn btn-labeled btn-primary" href="{{paper.pdf}}">PDF</a>{% endif %}
{% if paper.arXiv %}<a class="btn btn-labeled btn-primary" href="{{paper.pdf}}">arXiv</a>{% endif %}
{% if paper.bibtex %}<a class="btn btn-labeled btn-primary" href="{{paper.bibtex}}">BibTex</a>{% endif %}
{% if paper.code %}<a class="btn btn-labeled btn-primary" href="{{paper.code}}">Code</a>{% endif %}
{% if paper.slides %}<a class="btn btn-labeled btn-primary" href="{{paper.slides}}">Slides</a>{% endif %}
<br>

</td></tr>

{% endfor %}
</table>


