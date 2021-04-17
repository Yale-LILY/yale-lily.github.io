---
layout: page
permalink: /lily_talks/
---

 <header class="post-header">
    <h2 class="post-title">Invited Talks at LILY</h2>
  </header> 


## Schedule


<table>
{% for talk in site.data.lily_talks.talks %}


  <tr><td style="padding:10px">
{% if talk.image %}<img width="150px" src="{{talk.image}}"> {% endif %}
</td><td style="padding:10px">
{{talk.time}}
<br>
{% if talk.title %}
{{talk.title}}
<br> {% endif %}
{% if talk.speaker %}
<a class="paper" href="{{talk.url}}">
{{talk.speaker}}</a><br> {% endif %}
{% if talk.affiliation %}
{{talk.affiliation}} <br> {% endif %}


{% if talk.abstract %}
<a class="btn btn-labeled btn-primary" href="{{talk.collapse1}}" data-toggle="collapse"> Abstract </a> {% endif %} 
<div style="max-width:400px" id="{{talk.collapse2}}" class="collapse">
{{talk.abstract}}
</div>
{% if talk.bio %}
<a class="btn btn-labeled btn-primary" href="{{talk.collapse3}}" data-toggle="collapse"> Bio </a> 
<div style="max-width:400px" id="{{talk.collapse4}}" class="collapse">
{{talk.bio}}
</div>
{% endif %}
{% if talk.slides %}<a class="btn btn-labeled btn-primary" href="{{talk.slides}}">Slides</a>{% endif %}

<br>
</td></tr>

{% endfor %}
</table>

