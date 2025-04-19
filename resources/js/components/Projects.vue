<template>
    <div class="projects">
        <div class="content-section">
            <div class="project-title">
                <h1>Projects</h1>
            </div>
            <div class="projects-grid">
                <div v-for="project in projects" :key="project.id" class="project-card">
                    <div class="project-preview">
                        <img :src="project.image" :alt="project.title" class="project-image" />
                    </div>
                    <div class="project-info">
                        <h2 class="project-name">{{ project.title }}</h2>
                        <p class="project-description">{{ project.description }}</p>
                        <div class="tech-stack">
                            <div v-for="tech in project.technologies" 
                                 :key="tech" 
                                 class="tech-stack-item">
                                <i :class="getTechIcon(tech)"></i>
                                <span class="tech-name">{{ tech }}</span>
                            </div>
                        </div>
                        <div class="project-actions">
                            <a :href="project.demo" target="_blank" class="action-button code-button">Live Project</a>
                            <a :href="project.github" target="_blank" class="action-button live-button">Code</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const getTechIcon = (tech) => {
    const icons = {
        'Laravel': 'fab fa-laravel',
        'Vue.js': 'fab fa-vuejs',
        'React': 'fab fa-react',
        'Node.js': 'fab fa-node-js',
        'JavaScript': 'fab fa-js',
        'MongoDB': 'fas fa-database',
        'MySQL': 'fas fa-database',
        'Socket.io': 'fas fa-plug',
        'Chart.js': 'fas fa-chart-line',
        'TypeScript': 'fab fa-js-square',
        'Express': 'fas fa-server'
    };
    
    return icons[tech] || 'fas fa-code';
};

const projects = ref([
    {
        id: 1,
        title: 'Bookshelf',
        description: 'Virtual bookshelf built using React with TypeScript and the google books API. Server by Can Code Communities. render.com may take a moment to load. \n Username: hermione Password: granger',
        image: '/images/bookshelf.png',
        technologies: ['React', 'TypeScript'],
        demo: 'https://megan-bookstore.onrender.com/',
        github: 'https://github.com/Megpen97/BookStoreProject'
    },
    {
        id: 2,
        title: 'Retro Board',
        description: 'Simple Retro Board Project to track action items and scrum related feedback. Built using React. Stores data across sessions.',
        image: '/images/retro-board.png',
        technologies: ['React'],
        demo: 'https://megpen97.github.io/Retro-Board-Project/',
        github: 'https://github.com/Megpen97/Retro-Board-Project'
    },
    {
        id: 2,
        title: 'Calculator',
        description: 'Simple Calculator Web Application. Performs arithmetic operations on both whole numbers and decimals. Coded using HTML, CSS, and JavaScript.',
        image: '/images/calculator.png',
        technologies: ['JavaScript'],
        demo: 'https://megpen97.github.io/calculator/index.html',
        github: 'https://github.com/Megpen97/calculator'
    },
    {
        id: 3,
        title: 'To Do List',
        description: 'Simple To-Do List with local storage. Allows you to check off the items you have completed as well as filter through your completed and incompleted items.',
        image: '/images/todo.png',
        technologies: ['JavaScript'],
        demo: 'https://megpen97.github.io/To-Do-List/',
        github: 'https://github.com/Megpen97/To-Do-List'
    }
]);
</script>

<style scoped>
.projects {
    padding: 2rem;
    background-color: var(--background-cream);
    min-height: 100vh;
}

.content-section {
    max-width: 1200px;
    margin: 0 auto;
}

.project-title {
    text-align: center;
    margin-bottom: 3rem;
    background: var(--light-blue);
    display: inline-block;
    padding: 1rem 2rem;
    border-radius: 1rem;
    margin: 0 auto 3rem;
    display: block;
    width: fit-content;
}

.project-title h1 {
    color: #000;
    margin: 0;
    font-size: 2rem;
}

.projects-grid {
    display: flex;
    flex-direction: column;
    gap: 3rem;
}

.project-card {
    background: #E7E6EC;
    border-radius: 1rem;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    display: flex;
    margin: 0 auto;
    width: 100%;
    max-width: 1000px;
}

.project-preview {
    flex: 0 0 40%;
    position: relative;
    overflow: hidden;
}

.project-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.project-info {
    flex: 1;
    padding: 2rem;
    display: flex;
    flex-direction: column;
}

.project-name {
    font-size: 1.75rem;
    color: #000;
    margin-bottom: 1rem;
}

.project-description {
    color: #000;
    line-height: 1.6;
    margin-bottom: 1.5rem;
}

.tech-stack {
    display: flex;
    gap: 2rem;
    margin-bottom: 2rem;
    flex-wrap: wrap;
}

.tech-stack-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
}

.tech-stack-item i {
    font-size: 2rem;
}

.tech-stack-item i.fa-react {
    color: #61DAFB;
}

.tech-stack-item i.fa-js-square {
    color: #60B5FF;
}

.tech-stack-item i.fa-server {
    color: #000000;
}

.tech-stack-item i.fa-node-js {
    color: #339933;
}

.tech-stack-item i.fa-database {
    color: #47A248;
}

.tech-stack-item i.fa-plug {
    color: #010101;
}

.tech-stack-item i.fa-chart-line {
    color: #FF6384;
}

.tech-stack-item i.fa-laravel {
    color: #FF2D20;
}

.tech-stack-item i.fa-vuejs {
    color: #4FC08D;
}

.tech-stack-item i.fa-js {
    color: #F7DF1E;
}

.tech-name {
    font-size: 0.8rem;
    color: #000;
}

.project-actions {
    display: flex;
    gap: 1rem;
    margin-top: auto;
}

.action-button {
    padding: 0.75rem 1.5rem;
    border-radius: 0.5rem;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.live-button {
    background: #E9967A;
    color: #000;
}

.code-button {
    background: #E9967A;
    color: #000;
}

.action-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {
    .project-card {
        flex-direction: column;
    }

    .project-preview {
        height: 200px;
    }

    .project-actions {
        flex-direction: column;
    }

    .action-button {
        text-align: center;
    }
}
</style> 