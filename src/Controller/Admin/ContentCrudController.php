<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ContentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Content::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield Field::new('id')
            ->hideonForm()
        ;
        yield Field::new('headline')
            ->setLabel('Überschrift')
            ->setHelp('Überschrift der Seite die ganz oben erscheint.')
            ->setColumns('col-12')
        ;
        yield Field::new('url')
            ->setLabel('URL')
            ->setHelp('Die URL unter welcher die Seite erreichbar ist. Bitte in Kleinbuchstaben und Umlaute vermeiden!')
            ->setColumns('col-12')
        ;
        /*yield TextEditorField::new('content')
            ->hideonIndex()
            ->setNumOfRows(30)
            ->setTrixEditorConfig([
                'blockAttributes' => [
                    'default' => ['tagName' => 'p'],
                    'heading2' => ['tagName' => 'h2'],
                    'heading3' => ['tagName' => 'h3'],
                ],
                'css' => [
                    'attachment' => 'admin_file_field_attachment',
                ],
            ]);
        ;*/

        yield TextEditorField::new('content')->setTrixEditorConfig([
            'blockAttributes' => [
                'default' => ['tagName' => 'p'],
                'heading1' => ['tagName' => 'h2'],
            ],
            'css' => [
                'attachment' => 'admin_file_field_attachment',
            ],
        ]);
    }
    
}
