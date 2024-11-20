<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">PSPSCI</span>
                    <span class="logo-subtitle">Tableau de bord</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="<?php if (request()->is('admin/')) echo 'active'; ?>" href="{{route('dashboard')}}"><span class="icon home" aria-hidden="true"></span>Tableau de bord</a>
                </li>
                <li>
                    <a href="{{route('admin-members-lists')}}" class="<?php if (request()->is('admin/demandes-adhesions')) echo 'active'; ?>"><span class="icon message" aria-hidden="true"></span>Démande d'adhésion</a>
                </li>
                <li>
                    <a href="{{route('admin-teams-lists')}}" class="<?php if (request()->is('admin/notre-equipe')) echo 'active'; ?>"><span class="icon user-3" aria-hidden="true"></span>L'équipe</a>
                </li>
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon document" aria-hidden="true"></span>Publications
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="{{route('admin-create-post')}}">Créer un article</a>
                        </li>
                        <li>
                            <a href="{{route('admin-posts-lists')}}">Liste des articles</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
            <span class="system-menu__title">Paramétre</span>
            <ul class="sidebar-body-menu">
                <li>
                    <a class="show-cat-btn" href="##">
                        <span class="icon folder" aria-hidden="true"></span>Categories
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li>
                            <a href="categories.html">All categories</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="##"><span class="icon setting" aria-hidden="true"></span>Tags</a>
                </li>
            </ul>
        </div>
    </div>
</aside>