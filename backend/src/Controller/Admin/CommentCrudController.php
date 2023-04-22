<?php

namespace App\Controller\Admin;

use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\{Field, Config, Filter};

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    public function configureCrud(Config\Crud $crud): Config\Crud
    {
        return $crud
            ->setEntityLabelInSingular('Conference Comment')
            ->setEntityLabelInPlural('Conference Comments')
            ->setSearchFields(['author', 'text', 'email'])
            ->setDefaultSort(['createdAt' => 'DESC']);
    }

    public function configureFilters(
        Config\Filters $filters
    ): Config\Filters {
        return $filters->add(
            Filter\EntityFilter::new('conference')
        );
    }

    public function configureFields(string $pageName): iterable
    {
        yield Field\FormField::addPanel('Conference');
        yield Field\AssociationField::new('conference')
            ->setRequired(true)
            ->setHelp('Help text');
        yield Field\FormField::addPanel('Comment');
        yield Field\TextField::new('author')
            ->setHelp('Help text');
        yield Field\TextEditorField::new('text', 'Comment')
            ->setHelp('help text');
        yield Field\EmailField::new('email', 'Email Address')
            ->setHelp('Your valid email address');
        yield Field\TextField::new('photoFilename')
            ->onlyOnIndex();

        $createdAt = Field\DateTimeField::new('createdAt')
            ->SetFormTypeOptions([
                'html5' => true,
                'years' => range(date('Y'), (int) date('Y') + 5),
                'widget' => 'single_text',
            ]);

        if (Config\Crud::PAGE_EDIT === $pageName) {
            yield $createdAt->setFormTypeOption('disabled', true);
        } else {
            yield $createdAt;
        }
    }
}
