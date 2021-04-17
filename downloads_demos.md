---
layout: page
permalink: /downloads/
---

<!---title: Downloads -->
<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>
  <header class="post-header">
    <h2 class="post-title">Downloads</h2>
  </header> 

<p align="left"><a href="/michigan/">Access previous downloads from Michigan</a></p>

<table>
{% for download in site.data.lily_downloads.downloads %}
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

<!--<p align="left"><a href="/michigan/">Access previous downloads from Michigan](/michigan/)</p>-->

