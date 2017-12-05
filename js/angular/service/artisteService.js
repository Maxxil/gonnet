app.service('artisteService', function () {
    this.getArtistesInformation = function () {
        return [
            {
                id : '1',
                firstname : 'KADI',
                lastname : 'Massil',
                image : 'https://media-exp2.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAc6AAAAJGU2ZGY3MzJkLTE1OTMtNGJkNC04ZTE5LWM3NjFhMDgyZTJiNw.jpg',
                chosenField : 'Développeur',
                description : 'Développement en backend vial es technologies: NodeJS, ASP.NET et JAVA',
                fetishSentence : 'Savoir s\'adapter, savoir imaginer.',
                website: '',
                blog : '',
                facebook : '',
                twitter : '',
                instagram : '',
                googlePlus : '',
                youtube : '',
                dailymotion  : '',
                linkedin : '',
                twitch : '',
                viadeo : '',
                tumblr: '',
                pinterest : ''
            },
            {
                id : '2',
                firstname : 'BOUSQUET',
                lastname : 'Luca',
                image : './images/artistes/luca-bousquet.jpg',
                choserField : 'Freelance',
                description : 'Luca (sans "s") Bousquet, 24 ans mais ça va changer !\n' +
                'Un matin, je me suis réveillé pour aller en cours, en arrivant je me suis rendu compte que ce n\'était pas ce que je voulais faire, ce jour-là, j\'ai arrêté mon M2 pour lancer ma boite ! #TrueStory',
                fetishSentence : 'Know Better, Do Better.',
                website: 'http://www.luca-bousquet.fr/',
                blog : '',
                facebook : 'https://www.facebook.com/lucabousquetweb/',
                twitter : 'https://twitter.com/LucaBousquet',
                instagram : '',
                googlePlus : '',
                youtube : '',
                dailymotion  : '',
                linkedin : 'https://www.linkedin.com/in/lucabousquet/',
                twitch : '',
                viadeo : '',
                tumblr: '',
                pinterest : ''
            }

        ]
    }
})