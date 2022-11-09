<form id="searchform" class="d-flex justify-content-center" role="search" action="<?= esc_url(home_url('/'))?>">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
        value="<?php get_search_query() ?>">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
