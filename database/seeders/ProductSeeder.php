<?php


use Phinx\Seed\AbstractSeed;

class ProductSeeder extends AbstractSeed
{
    public function getDependencies() : array
    {
        return [
            'StateSeeder'
        ];
    }

    public function run(): void
    {
        $detail = 'Aqui vem um texto descritivo do produto, esta caixa de texto servirá apenas de exemplo para que simule algum texto que venha a ser inserido nesse campo, descrevendo tal produto.';

        $data = [
            [
                'name' => 'Caneca de cerâmica rústica',
                'value' => 40.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Caneca de cerâmica rústica.png']),
                'category_id' => 2,
            ],
            [
                'name' => 'Camiseta not today',
                'value' => 78.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Camiseta not today.png']),
                'category_id' => 1,
            ],
            [
                'name' => 'Caneca Black Ring',
                'value' => 32.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Caneca Black Ring.png']),
                'category_id' => 2,
            ],
            [
                'name' => 'Camiseta Broken Saints',
                'value' => 58.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Camiseta Broken Saints.png']),
                'category_id' => 1,
            ],
            [
                'name' => 'Camiseta Outcast',
                'value' => 89.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Camiseta Outcast.png']),
                'category_id' => 1,
            ],
            [
                'name' => 'Caneca The Grounds',
                'value' => 85.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Caneca The Grounds.png']),
                'category_id' => 2,
            ],
            [
                'name' => 'Camiseta evening',
                'value' => 69.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Camiseta evening.png']),
                'category_id' => 1,
            ],
            [
                'name' => 'Caneca preto fosco',
                'value' => 28.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Caneca preto fosco.png']),
                'category_id' => 2,
            ],
            [
                'name' => 'Caneca Never settle',
                'value' => 43.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Caneca Never settle.png']),
                'category_id' => 2,
            ],
            [
                'name' => 'Camiseta DREAMER',
                'value' => 55.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Camiseta DREAMER.png']),
                'category_id' => 1,
            ],
            [
                'name' => 'Caneca Decaf! P&Co',
                'value' => 32.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Caneca Decaf! P&Co.png']),
                'category_id' => 2,
            ],
            [
                'name' => 'Camiseta Ramonesh',
                'value' => 92.00,
                'detail' => $detail,
                'stock' => 100,
                'status' => true,
                'images' => json_encode(['Camiseta Ramonesh.png']),
                'category_id' => 1,
            ],
        ];

        $table = $this->table('products');
        $table->insert($data)->saveData();
    }
}
