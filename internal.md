---
layout: page
permalink: /internal/
---

<center><a href="https://yale-lily.github.io/"><img src="/lily-logo.png" alt="test image" width="20%" height="20%"></a></center>

  <header class="post-header">
    <h2 class="post-title">Reading Group</h2>
  </header> 
{% for term in site.data.internal.presentations %}
<div class ="row">

<div style="text-align:center">
<h3>
{{term.term}}
</h3>
<br>
</div>
</div>

<table class="table table-striped table-hover">
<tr>
    <th> Date </th> <th> Title </th> <th> Presenter</th> 
</tr>
{% for presentation in term.presentations %}
    <tr>
        <td> {{ presentation.date}} </td>
        <td> 
            {{ presentation.title}} 
        </td>
        <td> 
          {% if presentation.url %}
          <a href="{{ presentation.url }}"> {{presentation.presenter}}</a> 
          {% else %}
          {{presentation.presenter}}
          {% endif %}
        </td>
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



{% for term in site.data.internal.meetings %}
<div class ="row">

<div style="text-align:center">
<h3>
{{term.term}}
</h3>
</div>
</div>

<table class="table table-striped table-hover">
<tr>
    <th> Date</th> <th> Meeting</th> <th> Location </th>
</tr>
{% for event in term.events %}
    <tr>
        <td> {{ event.date }}  </td>
        <td> 
           {{event.type}}
        </td>
        <td> {{event.location}} </td>
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



