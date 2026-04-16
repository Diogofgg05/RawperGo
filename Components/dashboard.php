<div class="dashboard" id="dashboardPage">
    <div class="dashboard-header">
        <div class="container-wide">
            <h1 class="dashboard-title" id="dashboardWelcome">Bem-vindo de volta</h1>
            <p style="color: var(--gray-500);" id="dashboardSubtitle">A sua central de jogos retro</p>
        </div>
    </div>
    <div class="container-wide">
        <div class="dashboard-grid">
            <aside class="sidebar">
                <div class="profile-card" onclick="openProfileEditor()" style="cursor: pointer;">
                    <div class="profile-avatar" id="sidebarAvatar">U</div>
                    <div class="profile-info">
                        <h4 id="sidebarUserName">Utilizador</h4>
                        <p id="sidebarUserEmail">email@exemplo.com</p>
                        <p style="font-size: 0.8rem; color: var(--gray-500); margin-top: 0.25rem;"><span id="userLevel">Nível 42</span> · <span id="userXP">12.5k XP</span></p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="sidebar-item active" data-dashboard-view="library" onclick="switchDashboardView('library')"><span>📚</span> Biblioteca</li>
                    <li class="sidebar-item" data-dashboard-view="social" onclick="switchDashboardView('social')"><span>🌐</span> Feed Social</li>
                    <li class="sidebar-item" data-dashboard-view="multiplayer" onclick="switchDashboardView('multiplayer')"><span>👥</span> Multiplayer</li>
                    <li class="sidebar-item" data-dashboard-view="tournaments" onclick="switchDashboardView('tournaments')"><span>🏆</span> Torneios</li>
                    <li class="sidebar-item" data-dashboard-view="shop" onclick="switchDashboardView('shop')"><span>🛒</span> Loja Homebrew</li>
                    <li class="sidebar-item" data-dashboard-view="achievements" onclick="switchDashboardView('achievements')"><span>🎖️</span> Conquistas</li>
                    <li class="sidebar-item" data-dashboard-view="replays" onclick="switchDashboardView('replays')"><span>🎥</span> Replays</li>
                    <li class="sidebar-item" data-dashboard-view="friends" onclick="switchDashboardView('friends')"><span>👤</span> Amigos</li>
                    <li class="sidebar-item" data-dashboard-view="settings" onclick="switchDashboardView('settings')"><span>⚙️</span> Definições</li>
                    <li class="sidebar-item" data-dashboard-view="developer" onclick="switchDashboardView('developer')"><span>🔧</span> Developer</li>
                    <li class="sidebar-item" onclick="logout()"><span>🚪</span> Sair</li>
                </ul>
            </aside>
            <div class="main-content" id="dashboardMainContent"></div>
        </div>
    </div>
</div>
