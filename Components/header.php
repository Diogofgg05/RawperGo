<header class="header" id="mainHeader">
    <div class="container-wide">
        <div class="header-content">
            <a href="#" class="logo" id="logoLink"><span class="logo-icon">R</span><span>RETRO</span></a>
            <nav class="nav" id="mainNav">
                <a href="#home" class="nav-link active" data-nav="home">Início</a>
                <a href="#features" class="nav-link" data-nav="features">Funcionalidades</a>
                <a href="#demo" class="nav-link" data-nav="demo">Demonstração</a>
                <a href="#library" class="nav-link" data-nav="library">Biblioteca</a>
                <a href="#community" class="nav-link" data-nav="community">Comunidade</a>
            </nav>
            <div class="header-actions" id="headerActions">
                <button class="btn btn-ghost" onclick="openAuthModal('login')">Entrar</button>
                <button class="btn btn-primary" onclick="openAuthModal('register')">Criar conta</button>
            </div>
            <div class="header-actions" id="dashboardHeaderActions" style="display: none;">
                <div class="profile-card" style="padding: 0.5rem; margin: 0; cursor: pointer;" onclick="toggleProfileMenu()">
                    <div class="profile-avatar" style="width: 40px; height: 40px; font-size: 1rem;" id="headerAvatar">U</div>
                    <span id="headerUserName">Utilizador</span>
                </div>
            </div>
        </div>
    </div>
</header>
