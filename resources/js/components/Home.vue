<template>
    <div class="home">
        <div class="hero-section">
            <div class="content">
                <h1 class="name">Megan Starrington</h1>
                <h2 class="title">Full Stack Developer</h2>
                <p class="description">
                    Crafting beautiful, responsive web applications with modern technologies.
                    Passionate about clean code, user experience, and innovative solutions.
                </p>
                <div class="cta-buttons">
                    <Button label="View Projects" icon="pi pi-folder" class="p-button-primary" @click="$router.push('/projects')" />
                </div>
            </div>
            <div class="decorative-elements">
                <div class="code-snippet">
                    <span class="comment">// Hello World!</span>
                </div>
            </div>
        </div>

        <div class="featured-section">
            <Card>
                <template #title>Featured Skills</template>
                <template #content>
                    <div class="skills-grid">
                        <div v-for="skill in skills" :key="skill.name" class="skill-item">
                            <i :class="skill.icon"></i>
                            <span>{{ skill.name }}</span>
                        </div>
                    </div>
                </template>
            </Card>
        </div>
    </div>
</template>

<script setup>
const skills = [
    {
        name: 'Vue.js',
        icon: 'fab fa-vuejs',
    },
    {
        name: 'Laravel',
        icon: 'fab fa-laravel',
    },
    {
        name: 'JavaScript',
        icon: 'fab fa-js',
    },
    {
        name: 'PHP',
        icon: 'fab fa-php',
    },
    {
        name: 'WordPress',
        icon: 'fab fa-wordpress',
    },
    {
        name: 'HTML/CSS',
        icon: 'fab fa-html5',
    },
    {
        name: 'Node.js',
        icon: 'fab fa-node-js',
    },
    {
        name: 'npm',
        icon: 'fab fa-npm',
    },
    {
        name: 'Git',
        icon: 'fab fa-git-alt',
    },
    {
        name: 'REST APIs',
        icon: 'fas fa-network-wired',
    },
    {
        name: 'SQL',
        icon: 'fas fa-database',
    }
];
</script>

<style scoped>
:root {
    --primary-blue: #60B5FF;
    --light-blue: #B5DBFF;
    --background-cream: #FDF6EC;
    --accent-coral: #E9967A;
}

.home {
    min-height: calc(100vh - 5rem);
    padding: 2rem;
    display: flex;
    flex-direction: column;
    gap: 4rem;
    background-color: #fdf6ec;
}

.hero-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4rem;
    margin-top: 2rem;
}

.content {
    flex: 1;
    max-width: 600px;
}

.name {
    font-size: 3.5rem;
    font-weight: 700;
    background: #000;
    -webkit-background-clip: text;
    color: transparent;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}

.title {
    font-size: 2rem;
    font-weight: 600;
    color: #e9967a;
    margin-bottom: 1.5rem;
    text-shadow: 1px 1px 3px rgba(233, 150, 122, 0.3);
}

.description {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #000;
    margin-bottom: 2rem;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
}

.cta-buttons :deep(.p-button) {
    background: #E9967A;
    border-color: #E9967A;
    color: #000;
    transition: all 0.3s ease;
    padding: 1rem 2rem;
    font-weight: 600;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.cta-buttons :deep(.p-button .p-button-icon) {
    margin-right: 0.75rem;
}

.cta-buttons :deep(.p-button:hover) {
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
    
}

.decorative-elements {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.code-snippet {
    background: #8E8F93;
    color: #fdf6ec;
    padding: 2rem;
    border-radius: 1rem;
    font-family: monospace;
    position: relative;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.code-snippet::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: #B5DBFF;
}

.comment {
    color: var(--accent-coral);
}

.featured-section {
    margin-top: 2rem;
}

.featured-section :deep(.p-card) {
    background: #B5DBFF;
    border: 1px solid rgba(71, 85, 105, 0.3);
    border-radius: 1rem;
    backdrop-filter: blur(8px);
}

.featured-section :deep(.p-card-title) {
    color: #000;
    font-size: 1.5rem;
    font-weight: 600;
    padding: 1.5rem 1.5rem 0;
    margin-bottom: 0;
}

.featured-section :deep(.p-card-content) {
    padding: 1.5rem;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 1.25rem;
    padding: 0.5rem;
}

.skill-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    padding: 1.5rem;
    background: #FDF6EC;
    border: 1px solid rgba(71, 85, 105, 0.5);
    border-radius: 1rem;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
}

.skill-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, transparent, currentColor, transparent);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.skill-item:hover {
    background: #FDF6EC;
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
}

.skill-item:hover::before {
    opacity: 0.5;
}

.skill-item i {
    font-size: 2.5rem;
    transition: all 0.3s ease;
}

.skill-item span {
    font-size: 1rem;
    font-weight: 500;
    color: #000;
    text-align: center;
}

/* Keep the technology-specific brand colors */
.fa-vuejs { color: #42b883; }
.fa-laravel { color: #ff2d20; }
.fa-js { color: #f7df1e; }
.fa-php { color: #777bb4; }
.fa-wordpress { color: #21759b; }
.fa-html5 { color: #e34f26; }
.fa-node-js { color: #68a063; }
.fa-npm { color: #cb3837; }
.fa-git-alt { color: #f05032; }
.fa-network-wired { color: var(--primary-blue); }
.fa-database { color: var(--primary-blue); }

@keyframes iconFloat {
    0% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-5px) scale(1.1); }
    100% { transform: translateY(0) scale(1); }
}

.skill-item:hover i {
    animation: iconFloat 1s ease infinite;
    filter: drop-shadow(0 0 8px currentColor);
}

@media (max-width: 768px) {
    .hero-section {
        flex-direction: column;
        text-align: center;
        gap: 2rem;
    }

    .cta-buttons {
        justify-content: center;
    }

    .name {
        font-size: 2.5rem;
    }

    .title {
        font-size: 1.5rem;
    }
}
</style> 