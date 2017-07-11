<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GithubController extends Controller
{
    /**
     * @Route("/", name="github")
     */

    public function githubAction(Request $request)
    {
        return $this->render('github/index.html.twig', [
            'avatar_url' => 'https://avatars3.githubusercontent.com/u/27738202?v=3',
            'name' => 'Rafał',
            'login' => 'rafalratajczyk',
            'details' => [
                'location' => 'Wroclaw, Poland',
                'joined_on' => 'Joined on 18th April 2017'
            ],
            'linkedIn' => 'https://www.linkedin.com/in/rafał-ratajczyk',
            'social_data' => [
                'public_repos' => 6,
                'public_gists' => 0,
                'followers' => 0,
                'following' => 0,
            ],
            'repo_count' => 100,
            'most_stars' => 89,
            'repos' => [
                [
                    'name' => 'I have a question',
                    'url' => 'https://github.com/settings/profile',
                    'stargazers_count' => 51,
                    'description' => 'learnig Symfony 3'
                ],
                [
                    'name' => 'What do you think about Symfony?',
                    'url' => 'https://github.com/settings/profile',
                    'stargazers_count' => 67,
                    'description' => 'learnig Symfony 3'
                ],
                [
                    'name' => 'I think it is great!',
                    'url' => 'https://github.com/settings/profile',
                    'stargazers_count' => 42,
                    'description' => 'learnig Symfony 3'
                ],
            ]
        ]);
    }

    /**
     * @Route("/profile", name="profile")
     */

//    public function profileAction(Request $request)
//    {
//        return $this->render('github/profile.html.twig', [
//            'avatar_url' => 'https://avatars3.githubusercontent.com/u/27738202?v=3',
//            'name' => 'Rafał',
//            'login' => 'rafalratajczyk',
//            'details' => [
//                'location' => 'Wroclaw, Poland',
//                'joined_on' => 'Joined on 18th April 2017'
//            ],
//            'linkedIn' => 'https://www.linkedin.com/in/rafał-ratajczyk',
//            'social_data' => [
//                'public_repos' => 6,
//                'public_gists' => 0,
//                'followers' => 0,
//                'following' => 0,
//            ],
//        ]);
//    }
}