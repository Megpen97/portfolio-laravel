<template>
    <div class="about-container">
        <div class="about-card">
            <h1 class="page-title">About Me</h1>
            
            <div class="profile-section">
                <div class="profile-image-container">
                    <img src="/images/megan-cartoon.jpg" alt="Megan Starrington" class="profile-image" onerror="this.src='https://via.placeholder.com/200x200?text=MS';this.onerror='';" />
                    <div class="image-decoration"></div>
                </div>
                
                <div class="profile-info">
                    <h2 class="profile-name">Megan Starrington</h2>
                    <h3 class="profile-title">Software Engineer</h3>
                    <p class="profile-bio">
                        Full-stack developer specializing in Laravel and Vue.js applications, with hands-on experience in both LAMP and MERN stacks. 
                        I enjoy building efficient web tools that solve real problems, particularly focusing on data processing and secure applications. 
                        Currently working on expanding my knowledge of cloud infrastructure and modern JavaScript frameworks while contributing to client projects 
                        and helping mentor new developers.
                    </p>
                </div>
            </div>
            
            <div class="section skills-section">
                <h3 class="section-title">Technical Skills</h3>
                <div class="skill-tags">
                    <span class="skill-tag">Laravel/PHP</span>
                    <span class="skill-tag">Vue.js</span>
                    <span class="skill-tag">Node.js</span>
                    <span class="skill-tag">Linux Systems</span>
                    <span class="skill-tag">Git</span>
                    <span class="skill-tag">MySQL</span>
                    <span class="skill-tag">Web Security</span>
                    <span class="skill-tag">LAMP Stack</span>
                    <span class="skill-tag">MERN Stack</span>
                    <span class="skill-tag">Web Hosting</span>
                </div>
            </div>
            
            <div class="section experience-section">
                <h3 class="section-title">Professional Experience</h3>
                <div class="timeline">
                    <div v-for="(experience, index) in experiences" :key="index" class="timeline-item">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h4 class="job-title">{{ experience.role }}</h4>
                            <div class="job-meta">
                                <span class="company">{{ experience.company }}</span>
                                <span class="period">{{ experience.period }}</span>
                            </div>
                            <ul class="job-description">
                                <li v-for="(point, idx) in experience.description" :key="idx">{{ point }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section education-section">
                <h3 class="section-title">Education</h3>
                <div class="education-item">
                    <h4 class="degree">Associate's Degree in Computer Information Security</h4>
                    <div class="education-meta">
                        <span class="university">SUNY Schenectady County Community College</span>
                        <span class="year">2022 - 2024</span>
                    </div>
                </div>
            </div>
            
            <div class="cta-section">
                <router-link to="/projects" class="cta-button">View My Work</router-link>
            </div>
            
            <!-- Decorative elements -->
            <div class="decorative-elements">
                <div class="circle circle-1"></div>
                <div class="circle circle-2"></div>
                <div class="square"></div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const experiences = ref([
    {
        role: 'Technologist / Information Security Specialist',
        company: 'Troy Web Consulting, Troy, NY',
        period: 'Jan 2023 - Present',
        description: [
            'Build data processing tools using Laravel and Vue.js to handle bulk uploads and data validation, making it easier for clients to manage large datasets',
            'Maintain and secure client websites using Linux servers and various hosting platforms, ensuring sites stay updated and running smoothly',
            'Lead regular tech sharing sessions to help team members learn from each other and standardize our development practices',
            'Work with CS students to introduce them to professional development workflows, including Git version control and code review processes',
            'Manage our device inventory system, helping track company equipment and improve our security practices'
        ]
    },
    {
        role: 'Development Intern',
        company: 'Troy Web Consulting, Troy, NY',
        period: 'Sep 2022 - Dec 2022',
        description: [
            'Built a historical data website for a non-profit organization and contributed to a mobile app that helps people locate nearby food banks',
            'Participated in code reviews and team discussions, learning to write cleaner code and follow team standards',
            'Worked directly with clients to understand their needs and turn their ideas into working features',
            'Gained hands-on experience with both LAMP and MERN stacks, learning how to choose the right tools for different project needs'
        ]
    }
]);
</script>

<style scoped>
.about-container {
    min-height: 100vh;
    padding: 2rem;
    background-color: #FDF6EC;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.about-card {
    background-color: #ececec;
    border-radius: 24px;
    max-width: 1000px;
    width: 90%;
    padding: 4rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

.page-title {
    color: #000;
    font-size: 2.5rem;
    margin-bottom: 2.5rem;
    position: relative;
    display: inline-block;
}

.page-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 80px;
    height: 5px;
    background-color: #E9967A;
    border-radius: 5px;
}

.profile-section {
    display: flex;
    gap: 3rem;
    margin-bottom: 3rem;
}

.profile-image-container {
    position: relative;
    width: 200px;
    height: 200px;
    flex-shrink: 0;
}

.profile-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    position: relative;
    z-index: 5;
    border: 4px solid #fff;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}

.image-decoration {
    position: absolute;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    border: 2px dashed #E9967A;
    top: -10px;
    left: 10px;
    z-index: 1;
}

.profile-info {
    flex-grow: 1;
}

.profile-name {
    color: #000;
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.profile-title {
    color: #E9967A;
    font-size: 1.5rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
}

.profile-bio {
    color: #000;
    font-size: 1.1rem;
    line-height: 1.6;
}

.section {
    margin-bottom: 3rem;
}

.section-title {
    color: #000;
    font-size: 1.75rem;
    margin-bottom: 1.5rem;
    position: relative;
    display: inline-block;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: -8px;
    left: 0;
    width: 60px;
    height: 3px;
    background-color: #E9967A;
    border-radius: 5px;
}

.skill-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.skill-tag {
    background-color: #E9967A;
    color: #000;
    cursor: pointer;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-weight: 500;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.skill-tag:hover {
    background-color: #B5DBFF;
    color: #000;
    cursor: pointer;
    transform: translateY(-3px);
}

.timeline {
    position: relative;
    padding-left: 2rem;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 8px;
    width: 2px;
    background-color: rgba(65, 51, 255, 0.2);
}

.timeline-item {
    position: relative;
    margin-bottom: 2rem;
}

.timeline-marker {
    position: absolute;
    left: -2rem;
    width: 18px;
    height: 18px;
    border-radius: 50%;
    background-color: #E9967A;
    box-shadow: 0 0 0 4px rgba(65, 51, 255, 0.1);
    transform: translateX(1px);
}

.timeline-content {
    padding-bottom: 1rem;
}

.job-title {
    color: #1a202c;
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.job-meta, .education-meta {
    display: flex;
    justify-content: space-between;
    color: #4a5568;
    margin-bottom: 0.75rem;
    font-size: 0.95rem;
}

.company, .university {
    font-weight: 600;
}

.period, .year {
    color: #718096;
}

.education-section {
    margin-top: 3rem;
}

.education-item {
    margin-bottom: 2rem;
}

.degree {
    color: #1a202c;
    font-size: 1.25rem;
    margin-bottom: 0.5rem;
}

.education-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #9ca3af;
    font-size: 1rem;
}

.university {
    color: #4a5568;
    font-weight: 500;
}

.year {
    color: #9ca3af;
    font-weight: 500;
}

.cta-section {
    margin-top: 3rem;
    display: flex;
    justify-content: center;
}

.cta-button {
    display: inline-block;
    padding: 1rem 2rem;
    background-color: #E9967A;
    color: #000;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
    background-color: #E9967A;
}

/* Decorative elements */
.decorative-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 0;
    pointer-events: none;
}

.circle {
    position: absolute;
    border-radius: 50%;
}

.circle-1 {
    width: 200px;
    height: 200px;
    background: rgba(65, 51, 255, 0.03);
    top: 10%;
    right: 5%;
}

.circle-2 {
    width: 250px;
    height: 250px;
    background: rgba(65, 51, 255, 0.02);
    bottom: 5%;
    left: 5%;
}

.square {
    position: absolute;
    width: 100px;
    height: 100px;
    background: rgba(65, 51, 255, 0.04);
    transform: rotate(45deg);
    bottom: 20%;
    right: 10%;
}

.job-description {
    color: #4a5568;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
    padding-left: 1.2rem;
}

.job-description li {
    margin-bottom: 0.5rem;
}

.job-description li:last-child {
    margin-bottom: 0;
}

@media (max-width: 1024px) {
    .about-card {
        padding: 3rem;
    }
}

@media (max-width: 768px) {
    .about-container {
        padding: 1.5rem;
    }
    
    .about-card {
        padding: 2.5rem;
        width: 100%;
    }
    
    .profile-section {
        flex-direction: column;
        gap: 2rem;
        align-items: center;
        text-align: center;
    }
    
    .page-title, .section-title {
        text-align: center;
        display: block;
    }
    
    .page-title::after, .section-title::after {
        left: 50%;
        transform: translateX(-50%);
    }
    
    .cta-section {
        flex-direction: column;
    }
}

@media (max-width: 480px) {
    .about-card {
        padding: 2rem 1.5rem;
    }
    
    .job-meta, .education-meta {
        flex-direction: column;
        gap: 0.25rem;
    }
}
</style> 