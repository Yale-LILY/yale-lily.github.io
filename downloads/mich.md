---
layout: page
permalink: /michigan/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Downloads and Demos from Michigan</h2>
  </header> 

<strong><font size="5">Downloads</font></strong>

<table>
{% for download in site.data.downloads.downloads %}
<tr><td style="padding:10px">
{% if download.pdf %}
<a class="paper" href="{{download.pdf}}">
{{download.title}}
</a><br>
{% else %}
<strong>{{download.title}}</strong><br>
{% endif %}

{% if download.description %}
{{download.description}}<br>
{% endif %}

</td></tr>

{% endfor %}
</table>


<strong><font size="5">Demos</font></strong>

<table>
{% for download in site.data.demos.demos %}
<tr><td style="padding:10px">
{% if download.pdf %}
<a class="paper" href="{{download.pdf}}">
{{download.title}}
</a><br>
{% else %}
<strong>{{download.title}}</strong><br>
{% endif %}

{% if download.description %}
{{download.description}}<br>
{% endif %}

</td></tr>

{% endfor %}
</table>
