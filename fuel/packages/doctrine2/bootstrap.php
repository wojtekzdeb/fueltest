<?php

// Add namespace, necessary if you want the autoloader to be able to find classes
Autoloader::add_namespace('Doctrine', __DIR__.'/classes/Doctrine/');

// Add as core namespace
Autoloader::add_core_namespace('Doctrine');

// Add as core namespace (classes are aliased to global, thus useable without namespace prefix)
// Set the second argument to true to prefix and be able to overwrite core classes
Autoloader::add_core_namespace('Doctrine', true);

/*$classes = array();

parseDirectory($classes, __DIR__.'/classes/Doctrine/');

function parseDirectory(&$classes, $dirName){
    $dir = @opendir($dirName);

    while (($file = readdir($dir)) !== false) {
        if(is_dir($file)){
            parseDirectory($classes, $file);
        }else{
            $dirNameDoctrine = substr($dirName, strpos($dirName, 'Doctrine/'), strlen($dirName));
            $dirNamespaceDoctrine = str_replace('/', '\\', $dirNameDoctrine);
            $realpath = realpath($file);
            $filenameTmp = explode('.', $file);
            $filePath =__DIR__.'/classes/'.$dirNameDoctrine.'/'.$file;

            $classes[$dirNamespaceDoctrine] = $filePath;
        }
        //echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
    }
}
//var_dump($classes);
Autoloader::add_classes($classes);*/
//exit;
// And add the classes, this is useful for:
// - optimization: no path searching is necessary
// - it's required to be able to use as a core namespace
// - if you want to break the autoloader's path search rules
Autoloader::add_classes(array(
    'Doctrine' => __DIR__.'/classes/Doctrine.php',
    'Doctrine\\ORM\\Configuration' => __DIR__.'/classes/Doctrine/ORM/Configuration.php',
    'Doctrine\\DBAL\\Configuration' => __DIR__.'/classes/Doctrine/DBAL/Configuration.php',
    'Doctrine\\Common\\Cache\\ArrayCache' => __DIR__.'/classes/Doctrine/Common/Cache/ArrayCache.php',
    'Doctrine\\Common\\Cache\\CacheProvider' => __DIR__.'/classes/Doctrine/Common/Cache/CacheProvider.php',
    'Doctrine\\Common\\Cache\\Cache' => __DIR__.'/classes/Doctrine/Common/Cache/Cache.php',
    'Doctrine\\Common\\Annotations\\AnnotationRegistry' => __DIR__.'/classes/Doctrine/Common/Annotations/AnnotationRegistry.php',
    'Doctrine\\Common\\Annotations\\SimpleAnnotationReader' => __DIR__.'/classes/Doctrine/Common/Annotations/SimpleAnnotationReader.php',
    'Doctrine\\Common\\Annotations\\Reader' => __DIR__.'/classes/Doctrine/Common/Annotations/Reader.php',
    'Doctrine\\Common\\Annotations\\DocParser' => __DIR__.'/classes/Doctrine/Common/Annotations/DocParser.php',
    'Doctrine\\Common\\Annotations\\DocLexer' => __DIR__.'/classes/Doctrine/Common/Annotations/DocLexer.php',
    'Doctrine\\Common\\Lexer' => __DIR__.'/classes/Doctrine/Common/Lexer.php',
    'Doctrine\\Common\\Annotations\\Annotation\\Target' => __DIR__.'/classes/Doctrine/Common/Annotations/Annotation/Target.php',
    'Doctrine\\Common\\Annotations\\CachedReader' => __DIR__.'/classes/Doctrine/Common/Annotations/CachedReader.php',
    'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver' => __DIR__.'/classes/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php',
    'Doctrine\\Common\\Persistence\\Mapping\Driver\\AnnotationDriver' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/Driver/AnnotationDriver.php',
    'Doctrine\\Common\\Persistence\\Mapping\Driver\\MappingDriver' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/Driver/MappingDriver.php',
    'Doctrine\\Common\\EventManager' => __DIR__.'/classes/Doctrine/Common/EventManager.php',
    'Doctrine\\ORM\\EntityManager' => __DIR__.'/classes/Doctrine/ORM/EntityManager.php',
    'Doctrine\\Common\\Persistence\\ObjectManager' => __DIR__.'/classes/Doctrine/Common/Persistence/ObjectManager.php',
    'Doctrine\\DBAL\\DriverManager' => __DIR__.'/classes/Doctrine/DBAL/DriverManager.php',
    'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver' => __DIR__.'/classes/Doctrine/DBAL/Driver/PDOMySql/Driver.php',
    'Doctrine\\DBAL\\Driver' => __DIR__.'/classes/Doctrine/DBAL/Driver.php',
    'Doctrine\\DBAL\\Connection' => __DIR__.'/classes/Doctrine/DBAL/Connection.php',
    'Doctrine\\DBAL\\Driver\\Connection' => __DIR__.'/classes/Doctrine/DBAL/Driver/Connection.php',
    'Doctrine\\DBAL\\Query\\Expression\\ExpressionBuilder' => __DIR__.'/classes/Doctrine/DBAL/Query/Expression/ExpressionBuilder.php',
    'Doctrine\\DBAL\\Platforms\\MySqlPlatform' => __DIR__.'/classes/Doctrine/DBAL/Platforms/MySqlPlatform.php',
    'Doctrine\\DBAL\\Platforms\\AbstractPlatform' => __DIR__.'/classes/Doctrine/DBAL/Platforms/AbstractPlatform.php',
    'Doctrine\\ORM\\Mapping\\ClassMetadataFactory' => __DIR__.'/classes/Doctrine/ORM/Mapping/ClassMetadataFactory.php',
    'Doctrine\\Common\\Persistence\\Mapping\\AbstractClassMetadataFactory' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/AbstractClassMetadataFactory.php',
    'Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/ClassMetadataFactory.php',
    'Doctrine\\ORM\\UnitOfWork' => __DIR__.'/classes/Doctrine/ORM/UnitOfWork.php',
    'Doctrine\\Common\PropertyChangedListener' => __DIR__.'/classes/Doctrine/Common/PropertyChangedListener.php',
    'Doctrine\\ORM\Proxy\ProxyFactory' => __DIR__.'/classes/Doctrine/ORM/Proxy/ProxyFactory.php',
    'Doctrine\\DBAL\LockMode' => __DIR__.'/classes/Doctrine/DBAL/LockMode.php',
    'Doctrine\\Common\Util\ClassUtils' => __DIR__.'/classes/Doctrine/Common/Util/ClassUtils.php',
    'Doctrine\\Common\Persistence\Proxy' => __DIR__.'/classes/Doctrine/Common/Persistence/Proxy.php',
    'Doctrine\\Common\Persistence\Mapping\RuntimeReflectionService' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/RuntimeReflectionService.php',
    'Doctrine\\Common\Persistence\Mapping\ReflectionService' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/ReflectionService.php',
    'Doctrine\\ORM\Mapping\ClassMetadata' => __DIR__.'/classes/Doctrine/ORM/Mapping/ClassMetadata.php',
    'Doctrine\\ORM\Mapping\ClassMetadataInfo' => __DIR__.'/classes/Doctrine/ORM/Mapping/ClassMetadataInfo.php',
    'Doctrine\\Common\Persistence\Mapping\ClassMetadata' => __DIR__.'/classes/Doctrine/Common/Persistence/Mapping/ClassMetadata.php',
    'Doctrine\\ORM\Mapping\DefaultNamingStrategy' => __DIR__.'/classes/Doctrine/ORM/Mapping/DefaultNamingStrategy.php',
    'Doctrine\\ORM\Mapping\NamingStrategy' => __DIR__.'/classes/Doctrine/ORM/Mapping/NamingStrategy.php',
    'Doctrine\\DBAL\Types\Type' => __DIR__.'/classes/Doctrine/DBAL/Types/Type.php',
    'Doctrine\\DBAL\Types\IntegerType' => __DIR__.'/classes/Doctrine/DBAL/Types/IntegerType.php',    
    'Doctrine\\DBAL\Types\ArrayType' => __DIR__.'/classes/Doctrine/DBAL/Types/ArrayType.php',    
    'Doctrine\\DBAL\Types\BigintType' => __DIR__.'/classes/Doctrine/DBAL/Types/BigintType.php',    
    'Doctrine\\DBAL\Types\BlobType' => __DIR__.'/classes/Doctrine/DBAL/Types/BlobType.php',    
    'Doctrine\\DBAL\Types\BooleanType' => __DIR__.'/classes/Doctrine/DBAL/Types/BooleanType.php',    
    'Doctrine\\DBAL\Types\ConversionException' => __DIR__.'/classes/Doctrine/DBAL/Types/ConversionException.php',    
    'Doctrine\\DBAL\Types\DateTimeType' => __DIR__.'/classes/Doctrine/DBAL/Types/DateTimeType.php',    
    'Doctrine\\DBAL\Types\DateType' => __DIR__.'/classes/Doctrine/DBAL/Types/DateType.php',    
    'Doctrine\\DBAL\Types\DecimalType' => __DIR__.'/classes/Doctrine/DBAL/Types/DecimalType.php',    
    'Doctrine\\DBAL\Types\FloatType' => __DIR__.'/classes/Doctrine/DBAL/Types/FloatType.php',    
    'Doctrine\\DBAL\Types\GuidType' => __DIR__.'/classes/Doctrine/DBAL/Types/GuidType.php',    
    'Doctrine\\DBAL\Types\JsonArrayType' => __DIR__.'/classes/Doctrine/DBAL/Types/JsonArrayType.php',    
    'Doctrine\\DBAL\Types\ObjectType' => __DIR__.'/classes/Doctrine/DBAL/Types/ObjectType.php',    
    'Doctrine\\DBAL\Types\SimpleArrayType' => __DIR__.'/classes/Doctrine/DBAL/Types/SimpleArrayType.php',    
    'Doctrine\\DBAL\Types\SmallintType' => __DIR__.'/classes/Doctrine/DBAL/Types/SmallintType.php',    
    'Doctrine\\DBAL\Types\StringType' => __DIR__.'/classes/Doctrine/DBAL/Types/StringType.php',    
    'Doctrine\\DBAL\Types\TextType' => __DIR__.'/classes/Doctrine/DBAL/Types/TextType.php',    
    'Doctrine\\DBAL\Types\TimeType' => __DIR__.'/classes/Doctrine/DBAL/Types/TimeType.php',    
    'Doctrine\\DBAL\Types\VarDateTimeType' => __DIR__.'/classes/Doctrine/DBAL/Types/VarDateTimeType.php',    
    'Doctrine\\ORM\Id\AssignedGenerator' => __DIR__.'/classes/Doctrine/ORM/Id/AssignedGenerator.php',    
    'Doctrine\\ORM\Id\AbstractIdGenerator' => __DIR__.'/classes/Doctrine/ORM/Id/AbstractIdGenerator.php',    
    'Doctrine\\ORM\Events' => __DIR__.'/classes/Doctrine/ORM/Events.php',    
    'Doctrine\\ORM\Persisters\BasicEntityPersister' => __DIR__.'/classes/Doctrine/ORM/Persisters/BasicEntityPersister.php',    
    'Doctrine\\Common\Collections\Expr\Comparison' => __DIR__.'/classes/Doctrine/Common/Collections/Expr/Comparison.php',    
    'Doctrine\\Common\Collections\Expr\Expression' => __DIR__.'/classes/Doctrine/Common/Collections/Expr/Expression.php',    
    'Doctrine\\ORM\Mapping\DefaultQuoteStrategy' => __DIR__.'/classes/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php',    
    'Doctrine\\ORM\Mapping\QuoteStrategy' => __DIR__.'/classes/Doctrine/ORM/Mapping/QuoteStrategy.php',    
    'Doctrine\\ORM\Query\FilterCollection' => __DIR__.'/classes/Doctrine/ORM/Query/FilterCollection.php',    
    'Doctrine\\ORM\Query\ResultSetMapping' => __DIR__.'/classes/Doctrine/ORM/Query/ResultSetMapping.php',    
    'Doctrine\\DBAL\Driver\PDOConnection' => __DIR__.'/classes/Doctrine/DBAL/Driver/PDOConnection.php',    
    'Doctrine\\DBAL\Driver\PDOStatement' => __DIR__.'/classes/Doctrine/DBAL/Driver/PDOStatement.php',    
    'Doctrine\\DBAL\Driver\Statement' => __DIR__.'/classes/Doctrine/DBAL/Driver/Statement.php',    
    'Doctrine\\DBAL\Driver\ResultStatement' => __DIR__.'/classes/Doctrine/DBAL/Driver/ResultStatement.php',    
    'Doctrine\\DBAL\Events' => __DIR__.'/classes/Doctrine/DBAL/Events.php',    
    'Doctrine\\DBAL\SQLParserUtils' => __DIR__.'/classes/Doctrine/DBAL/SQLParserUtils.php',    
    'Doctrine\\ORM\Query' => __DIR__.'/classes/Doctrine/ORM/Query.php',    
    'Doctrine\\ORM\AbstractQuery' => __DIR__.'/classes/Doctrine/ORM/AbstractQuery.php',    
    'Doctrine\\ORM\Internal\Hydration\SimpleObjectHydrator' => __DIR__.'/classes/Doctrine/ORM/Internal/Hydration/SimpleObjectHydrator.php',    
    'Doctrine\\ORM\Internal\Hydration\AbstractHydrator' => __DIR__.'/classes/Doctrine/ORM/Internal/Hydration/AbstractHydrator.php',    
    'Doctrine\\ORM\ORMException' => __DIR__.'/classes/Doctrine/ORM/ORMException.php',    
    'Doctrine\\ORM\Id\IdentityGenerator' => __DIR__.'/classes/Doctrine/ORM/Id/IdentityGenerator.php',    
    'Doctrine\\ORM\Internal\CommitOrderCalculator' => __DIR__.'/classes/Doctrine/ORM/Internal/CommitOrderCalculator.php',    
    'Doctrine\\DBAL\Statement' => __DIR__.'/classes/Doctrine/DBAL/Statement.php',    
    'Doctrine\\ORM\EntityRepository' => __DIR__.'/classes/Doctrine/ORM/EntityRepository.php',    
    'Doctrine\\Common\Persistence\ObjectRepository' => __DIR__.'/classes/Doctrine/Common/Persistence/ObjectRepository.php',    
    'Doctrine\\Common\Collections\Selectable' => __DIR__.'/classes/Doctrine/Common/Collections/Selectable.php',    
    'Doctrine\\Common\Util\Inflector' => __DIR__.'/classes/Doctrine/Common/Util/Inflector.php',    
));

\Config::load('doctrine2', true);