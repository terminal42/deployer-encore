<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ClassNotation\VisibilityRequiredFixer;
use PhpCsFixer\Fixer\ControlStructure\ControlStructureBracesFixer;
use PhpCsFixer\Fixer\ControlStructure\NoAlternativeSyntaxFixer;
use PhpCsFixer\Fixer\FunctionNotation\VoidReturnFixer;
use PhpCsFixer\Fixer\PhpTag\BlankLineAfterOpeningTagFixer;
use PhpCsFixer\Fixer\PhpTag\LinebreakAfterOpeningTagFixer;
use PhpCsFixer\Fixer\Semicolon\SemicolonAfterInstructionFixer;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Strict\StrictComparisonFixer;
use PhpCsFixer\Fixer\Strict\StrictParamFixer;
use SlevomatCodingStandard\Sniffs\Namespaces\ReferenceUsedNamesOnlySniff;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__.'/default.php']);

    $ecsConfig->skip([
        BlankLineAfterOpeningTagFixer::class,
        DeclareStrictTypesFixer::class,
        LinebreakAfterOpeningTagFixer::class,
        NoAlternativeSyntaxFixer::class,
        ReferenceUsedNamesOnlySniff::class,
        SemicolonAfterInstructionFixer::class,
        StrictComparisonFixer::class,
        StrictParamFixer::class,
        VisibilityRequiredFixer::class,
        VoidReturnFixer::class,
        ControlStructureBracesFixer::class,
    ]);

    $ecsConfig->fileExtensions(['html5']);
    $ecsConfig->cacheDirectory(sys_get_temp_dir().'/ecs_template_cache');

    if (file_exists(getcwd().'/ecs.php')) {
        $ecsConfig->import(getcwd().'/ecs.php');
    }
};
