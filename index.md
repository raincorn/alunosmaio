---
layout: default
---

# CARDS
  Cards são nossas páginas *pinned* que necessitam de atenção, você não deve saber da sua existência, mas eles estão aqui, veja:

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-block">
          <h3 class="card-title">CAMPUNO <span class="label label-info">Blog</span></h3>
          <br>
          <p class="card-text">Nosso evento em alta que traz a você uma competição de UNO com alunos. Pontos serão creditados aumentando mais a competição.</p>
          <a href="{% post_url 2017-03-26-campuno %}" class="btn btn-info">Leia mais &raquo;</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-block">
          <h3 class="card-title">Contribua</h3>
          <br>
          <p class="card-text">Nós trabalhamos em parceria com a <i>open source project</i> e nosso código está disponível para você hackear. Este site é uma comunidade, e como toda comunidade precisamos de nossos membros.</p>
          <a href="{{site.baseurl}}about/contribute/" class="btn btn-primary">Contribua &raquo;</a>
        </div>
      </div>
    </div>
  </div>

# <i class="fa fa-info-circle"></i>  Informações

  Nosso site está em processo de criação e por este motivo não há conteúdo adicional, nós estamos atualmente na versão <kbd>{{site.current_version}}</kbd> contribua, seja membro do nosso time.

## Nosso time

O time atual que contribui para o promovimento de eventos ou do site.

{% include ourteam.html %}
