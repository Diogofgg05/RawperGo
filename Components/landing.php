<div class="landing" id="landingPage">
    <section class="hero" id="home">
        <div class="container-wide">
            <div class="hero-grid">
                <div>
                    <span class="hero-badge">✨ Emulador Cloud · +50.000 jogos</span>
                    <h1 class="hero-title">Jogue os clássicos<br>em qualquer lugar</h1>
                    <p class="hero-description">Carregue as suas ROMs, guarde o progresso na cloud e jogue com amigos sem complicações. Biblioteca integrada com a RAWG API.</p>
                    <div class="hero-cta">
                        <button class="btn btn-primary btn-large" onclick="openAuthModal('register')">Começar agora</button>
                        <button class="btn btn-secondary btn-large" onclick="document.getElementById('demo').scrollIntoView({behavior:'smooth'})">Ver demo</button>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item"><div class="stat-value" id="totalGamesStat">50K+</div><div class="stat-label">Jogos</div></div>
                        <div class="stat-item"><div class="stat-value">120K+</div><div class="stat-label">Jogadores</div></div>
                        <div class="stat-item"><div class="stat-value">500K+</div><div class="stat-label">Saves Cloud</div></div>
                        <div class="stat-item"><div class="stat-value">25K+</div><div class="stat-label">Salas Multiplayer</div></div>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="terminal-preview">
                        <div class="terminal-line"><span class="terminal-prompt">$</span><span class="terminal-output">retro sync --library</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">></span><span class="terminal-output">Sincronizando com RAWG API...</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">></span><span class="terminal-output">52,847 jogos encontrados</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">></span><span class="terminal-output">Cloud saves: 24 disponíveis</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">$</span><span class="terminal-output">retro play "Zelda" --shader=crt</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">></span><span class="terminal-output">WebAssembly inicializado</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">></span><span class="terminal-output">A carregar... OK</span></div>
                        <div class="terminal-line"><span class="terminal-prompt">$</span><span class="terminal-output">_</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container-wide">
            <h2 class="text-center">Plataforma Completa de Emulação</h2>
            <p class="text-center" style="color: var(--gray-500); margin-bottom: 3rem; max-width: 700px; margin-left: auto; margin-right: auto;">Integração profunda com RAWG API, WebAssembly para emulação de alta performance, e um ecossistema social completo.</p>
            <div class="features-grid">
                <div class="feature-card"><div class="feature-icon">💾</div><div class="feature-title">Cloud Saves Ilimitados</div><div class="feature-text">Progresso guardado automaticamente na cloud com versionamento e restauro de pontos específicos.</div></div>
                <div class="feature-card"><div class="feature-icon">🌍</div><div class="feature-title">Cross-Platform Total</div><div class="feature-text">Windows, macOS, Linux, iOS, Android e Web. A sua biblioteca sempre sincronizada.</div></div>
                <div class="feature-card"><div class="feature-icon">👥</div><div class="feature-title">Multiplayer com Rollback</div><div class="feature-text">Netcode moderno para jogos de luta e plataformas. Baixa latência garantida.</div></div>
                <div class="feature-card"><div class="feature-icon">🏆</div><div class="feature-title">Conquistas & Leaderboards</div><div class="feature-text">Sistema completo de conquistas com badges raras e rankings globais por jogo.</div></div>
                <div class="feature-card"><div class="feature-icon">🎨</div><div class="feature-title">Shaders & Filtros</div><div class="feature-text">CRT, LCD, Scale2x, xBRZ e mais. Personalize a experiência visual.</div></div>
                <div class="feature-card"><div class="feature-icon">🛠️</div><div class="feature-title">Ferramentas de Modding</div><div class="feature-text">Editor de ROM hacks integrado. Aplique patches IPS/UPS com um clique.</div></div>
                <div class="feature-card"><div class="feature-icon">🎥</div><div class="feature-title">Replays & Destaques</div><div class="feature-text">Grave as suas jogadas e partilhe momentos épicos com a comunidade.</div></div>
                <div class="feature-card"><div class="feature-icon">🏪</div><div class="feature-title">Loja Homebrew</div><div class="feature-text">Descubra e jogue ROMs homebrew criadas pela comunidade indie.</div></div>
                <div class="feature-card"><div class="feature-icon">🤖</div><div class="feature-title">Discord Rich Presence</div><div class="feature-text">Mostre o que está a jogar em tempo real no seu perfil do Discord.</div></div>
            </div>
        </div>
    </section>

    <section class="section" id="demo" style="padding: 6rem 0; background: var(--beige-light);">
        <div class="container-narrow">
            <div class="demo-content" style="background: var(--white); padding: 3rem; border-radius: var(--radius-2xl);">
                <h2 class="text-center">Veja a plataforma em ação</h2>
                <div class="demo-preview" onclick="playDemoVideo()" style="aspect-ratio: 16/9; background: var(--gray-200); border-radius: var(--radius-xl); display: flex; align-items: center; justify-content: center; cursor: pointer; margin: 2rem 0;">
                    <span style="display: flex; align-items: center; gap: 0.75rem;"><span style="font-size: 2rem;">▶</span> Reproduzir demonstração completa</span>
                </div>
                <div style="display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem; margin-top: 2rem;">
                    <div style="text-align: center;"><span style="font-size: 2rem;">🎮</span><p>Emulação WebAssembly</p></div>
                    <div style="text-align: center;"><span style="font-size: 2rem;">☁️</span><p>Saves na Cloud</p></div>
                    <div style="text-align: center;"><span style="font-size: 2rem;">👾</span><p>Multiplayer Rollback</p></div>
                </div>
            </div>
        </div>
    </section>
</div>
