<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function homepage()
    {


        // Portfolio items
        $portfolioItems = [
            // [
            //     'id' => 1,
            //     'location' => 'Lisboa, Restelo',
            //     'title' => 'Moradia Moderna em Lisboa',
            //     'description' => 'Remodelação completa de moradia unifamiliar dos anos 80, transformando espaços compartimentados numa casa contemporânea de conceito aberto, com atenção ao detalhe em cada acabamento.',
            //     'tags' => ['Remodelação', 'Modelação 3D', 'Gestão de Obra'],
            //     'csr' => [
            //         'challenge' => 'Casa antiga com layout fechado',
            //         'solution'  => 'Conceito aberto e luz natural',
            //         'result'    => '180m² modernos e funcionais',
            //     ],
            //     'proof_points' => [
            //         [
            //             'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>', // or 'key'
            //             'text' => 'Prazo cumprido: 6 meses',
            //         ],
            //         [
            //             'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"></path><path d="m21 2-9.6 9.6"></path><circle cx="7.5" cy="15.5" r="5.5"></circle></svg>',
            //             'text' => 'Chave-na-mão completo',
            //         ],
            //     ],
            // ],
            // [
            //     'id' => 2,
            //     'location' => 'Lisboa, Restelo',
            //     'title' => 'Moradia Moderna em Lisboa',
            //     'description' => 'Remodelação completa de moradia unifamiliar dos anos 80, transformando espaços compartimentados numa casa contemporânea de conceito aberto, com atenção ao detalhe em cada acabamento.',
            //     'tags' => ['Remodelação', 'Modelação 3D', 'Gestão de Obra'],
            //     'csr' => [
            //         'challenge' => 'Casa antiga com layout fechado',
            //         'solution'  => 'Conceito aberto e luz natural',
            //         'result'    => '180m² modernos e funcionais',
            //     ],
            //     'proof_points' => [
            //         [
            //             'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>', // or 'key'
            //             'text' => 'Prazo cumprido: 6 meses',
            //         ],
            //         [
            //             'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"></path><path d="m21 2-9.6 9.6"></path><circle cx="7.5" cy="15.5" r="5.5"></circle></svg>',
            //             'text' => 'Chave-na-mão completo',
            //         ],
            //     ],
            // ],
            [
                'id' => 3,
                'location' => 'Lisboa',
                'title' => 'Restaurante em Lisboa',
                'description' => 'Obra de união de três edifícios contíguos e instalação de nova estrutura. Obra de interior de restaurante.',
                'tags' => ['Gestão de Obra'],
                'csr' => [
                    'challenge' => 'Alteração estrutural total interior e cobertura',
                    'solution'  => 'Alteração de estrutura para estrutura metálica e cobertura em painel de isolamento',
                    'result'    => '1000m<sup>2</sup> de um novo restaurante premium na zona ribeirinha da cidade',
                ],
                'proof_points' => [
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>', // or 'key'
                        'text' => 'Prazo cumprido: 6 meses',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"></path><path d="m21 2-9.6 9.6"></path><circle cx="7.5" cy="15.5" r="5.5"></circle></svg>',
                        'text' => 'Chave-na-mão completo',
                    ],
                ],
            ],
            [
                'id' => 4,
                'location' => 'Lisboa',
                'title' => 'Hotel em Lisboa',
                'description' => 'Reabilitação dos pisos de quartos e acessos',
                'tags' => ['Gestão de Obra'],
                'csr' => [
                    'challenge' => 'Trabalhos diversos num curto espaço tempo com timings apertados de trabalho',
                    'solution'  => 'Modernização dos pisos de quartos',
                    'result'    => 'Quartos modernos, luminosos, funcionais e sustentáveis',
                ],
                'proof_points' => [
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>', // or 'key'
                        'text' => 'Prazo cumprido: 1 ano e meio',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"></path><path d="m21 2-9.6 9.6"></path><circle cx="7.5" cy="15.5" r="5.5"></circle></svg>',
                        'text' => 'Chave-na-mão completo',
                    ],
                ],
            ],
            [
                'id' => 5,
                'location' => 'Lisboa',
                'title' => 'Escritório em Lisboa',
                'description' => 'Transformação dos espaços existentes e ampliação do escritório para novos espaços',
                'tags' => ['Gestão de Obra'],
                'csr' => [
                    'challenge' => 'Horário disponível de trabalho e trabalho noturno',
                    'solution'  => 'Adicionado espaços de trabalho e lazer',
                    'result'    => '850m<sup>2</sup> de escritórios open space',
                ],
                'proof_points' => [
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>', // or 'key'
                        'text' => 'Prazo cumprido: 6 meses',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"></path><path d="m21 2-9.6 9.6"></path><circle cx="7.5" cy="15.5" r="5.5"></circle></svg>',
                        'text' => 'Chave-na-mão completo',
                    ],
                ],
            ],
            [
                'id' => 6,
                'location' => 'Lisboa',
                'title' => 'Escritório em Lisboa',
                'description' => 'Transformação dos espaços existentes e ampliação do escritório para novos espaços',
                'tags' => ['Gestão de Obra'],
                'csr' => [
                    'challenge' => 'Obra por fases',
                    'solution'  => 'Ampliação do espaço e criação de novo espaço de trabalho',
                    'result'    => '300m<sup>2</sup> de um espaço multifuncional para uma empresa',
                ],
                'proof_points' => [
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>', // or 'key'
                        'text' => 'Prazo cumprido: 4 meses',
                    ],
                    [
                        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key text-[#D1BCA5]" data-fg-dx9l61="2.22:49.11889:/src/app/components/Portfolio.tsx:268:29:15020:185:e:point.icon"><path d="m15.5 7.5 2.3 2.3a1 1 0 0 0 1.4 0l2.1-2.1a1 1 0 0 0 0-1.4L19 4"></path><path d="m21 2-9.6 9.6"></path><circle cx="7.5" cy="15.5" r="5.5"></circle></svg>',
                        'text' => 'Chave-na-mão completo',
                    ],
                ],
            ],
            // add more...
        ];

        // Portfolio Item images
        foreach ($portfolioItems as &$item) {
            $item['images'] = $this->getPortfolioImages($item['id']);
        }
        unset($item);


        return view('homepage',
            compact('portfolioItems')
        );
    }

    private function getPortfolioImages(int|string $id): array
    {
        $relative = "assets/img/content/portfolio/{$id}";
        $dir = public_path($relative);

        if (!\Illuminate\Support\Facades\File::exists($dir)) {
            return [];
        }

        return collect(\Illuminate\Support\Facades\File::files($dir))
            ->sortBy(fn ($f) => $f->getFilename())
            ->filter(fn ($f) => in_array(strtolower($f->getExtension()), ['jpg','jpeg','png','webp','gif','jfif']))
            ->map(fn ($f) => asset($relative . '/' . $f->getFilename()))
            ->values()
            ->all();
    }

}