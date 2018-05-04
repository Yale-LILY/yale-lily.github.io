---
layout: page
title: Projects
permalink: /projects/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Projects</h2>
  </header> 

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


