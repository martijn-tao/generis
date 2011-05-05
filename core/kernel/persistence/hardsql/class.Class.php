<?php

error_reporting(E_ALL);

/**
 * Generis Object Oriented API - core\kernel\persistence\hardsql\class.Class.php
 *
 * $Id$
 *
 * This file is part of Generis Object Oriented API.
 *
 * Automatically generated on 04.05.2011, 14:40:23 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
 * @package core
 * @subpackage kernel_persistence_hardsql
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include core_kernel_persistence_PersistenceImpl
 *
 * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
 */
require_once('core/kernel/persistence/class.PersistenceImpl.php');

/**
 * include core_kernel_persistence_ClassInterface
 *
 * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
 */
require_once('core/kernel/persistence/interface.ClassInterface.php');

/* user defined includes */
// section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000013A7-includes begin
// section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000013A7-includes end

/* user defined constants */
// section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000013A7-constants begin
// section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000013A7-constants end

/**
 * Short description of class core_kernel_persistence_hardsql_Class
 *
 * @access public
 * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
 * @package core
 * @subpackage kernel_persistence_hardsql
 */
class core_kernel_persistence_hardsql_Class
    extends core_kernel_persistence_PersistenceImpl
        implements core_kernel_persistence_ClassInterface
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute instance
     *
     * @access public
     * @var Resource
     */
    public static $instance = null;

    // --- OPERATIONS ---

    /**
     * Short description of method getSubClasses
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  boolean recursive
     * @return array
     */
    public function getSubClasses( core_kernel_classes_Resource $resource, $recursive = false)
    {
        $returnValue = array();

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014EB begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014EB end

        return (array) $returnValue;
    }

    /**
     * Short description of method isSubClassOf
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  Class parentClass
     * @return boolean
     */
    public function isSubClassOf( core_kernel_classes_Resource $resource,  core_kernel_classes_Class $parentClass)
    {
        $returnValue = (bool) false;

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014F0 begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014F0 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method getParentClasses
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  boolean recursive
     * @return array
     */
    public function getParentClasses( core_kernel_classes_Resource $resource, $recursive = false)
    {
        $returnValue = array();

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014F5 begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014F5 end

        return (array) $returnValue;
    }

    /**
     * Short description of method getProperties
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  boolean recursive
     * @return array
     */
    public function getProperties( core_kernel_classes_Resource $resource, $recursive = false)
    {
        $returnValue = array();

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014FA begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:00000000000014FA end

        return (array) $returnValue;
    }

    /**
     * Short description of method getInstances
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  boolean recursive
     * @param  array params
     * @return array
     */
    public function getInstances( core_kernel_classes_Resource $resource, $recursive = false, $params = array())
    {
        $returnValue = array();

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001500 begin
        
		$dbWrapper = core_kernel_classes_DbWrapper::singleton();
        $tableName = core_kernel_persistence_hardapi_Utils::getShortName($resource);
    	$sqlQuery = "SELECT uri FROM {$tableName} WHERE 1";
		$sqlResult = $dbWrapper->execSql($sqlQuery);
		
		while (!$sqlResult->EOF){

			$instance = new core_kernel_classes_Resource($sqlResult->fields['uri']);
			$returnValue[$instance->uriResource] = $instance ;
			$sqlResult->MoveNext();
		}
		if($recursive == true){
			
			$subClasses = $resource->getSubClasses(true);
			foreach ($subClasses as $subClass){
				$returnValue = array_merge($returnValue, $subClass->getInstances(true));
			}
		}
        
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001500 end

        return (array) $returnValue;
    }

    /**
     * Short description of method setInstance
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  Resource instance
     * @return core_kernel_classes_Resource
     */
    public function setInstance( core_kernel_classes_Resource $resource,  core_kernel_classes_Resource $instance)
    {
        $returnValue = null;

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001506 begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001506 end

        return $returnValue;
    }

    /**
     * Short description of method setSubClassOf
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  Class iClass
     * @return boolean
     */
    public function setSubClassOf( core_kernel_classes_Resource $resource,  core_kernel_classes_Class $iClass)
    {
        $returnValue = (bool) false;

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:000000000000150F begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:000000000000150F end

        return (bool) $returnValue;
    }

    /**
     * Short description of method setProperty
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  Property property
     * @return boolean
     */
    public function setProperty( core_kernel_classes_Resource $resource,  core_kernel_classes_Property $property)
    {
        $returnValue = (bool) false;

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001512 begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001512 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method createInstance
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  string label
     * @param  string comment
     * @param  string uri
     * @return core_kernel_classes_Resource
     */
    public function createInstance( core_kernel_classes_Resource $resource, $label = '', $comment = '', $uri = '')
    {
        $returnValue = null;

        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F27 begin

		$dbWrapper = core_kernel_classes_DbWrapper::singleton();
		
        if($uri == ''){
			$subject = common_Utils::getNewUri();
		}
		else {
			//$uri should start with # and be well formed
			$modelUri = core_kernel_classes_Session::singleton()->getNameSpace();
			$subject = $modelUri . $uri;
		}

		$returnValue = new core_kernel_classes_Resource($subject,__METHOD__);
		
		$table = core_kernel_persistence_hardapi_Utils::getShortName ($resource);
		$query = "INSERT INTO `{$table}` (`uri`, `05label`) VALUES (?, ?)";
		$result = $dbWrapper->execSql($query, array(
       		$subject
       		, $label
        ));
        
        // reference the newly created instance
        core_kernel_persistence_hardapi_ResourceReferencer::singleton()->referenceResource($returnValue, $table, array(new core_kernel_classes_Class($resource)));
        
        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F27 end

        return $returnValue;
    }

    /**
     * Short description of method createSubClass
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  string label
     * @param  string comment
     * @return core_kernel_classes_Class
     */
    public function createSubClass( core_kernel_classes_Resource $resource, $label = '', $comment = '')
    {
        $returnValue = null;

        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F32 begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F32 end

        return $returnValue;
    }

    /**
     * Short description of method createProperty
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  string label
     * @param  string comment
     * @param  boolean isLgDependent
     * @return core_kernel_classes_Property
     */
    public function createProperty( core_kernel_classes_Resource $resource, $label = '', $comment = '', $isLgDependent = false)
    {
        $returnValue = null;

        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F3C begin
        throw new core_kernel_persistence_ProhibitedFunctionException("not implemented => The function (".__METHOD__.") is not available in this persistence implementation (".__CLASS__.")");
        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F3C end

        return $returnValue;
    }

    /**
     * Short description of method searchInstances
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @param  array propertyFilters
     * @param  array options
     * @return array
     */
    public function searchInstances( core_kernel_classes_Resource $resource, $propertyFilters = array(), $options = array())
    {
        $returnValue = array();

        // section 10-13-1--128--26678bb4:12fbafcb344:-8000:00000000000014F0 begin
		
		if(count($propertyFilters) == 0){
			return $returnValue;
		}
		
		$dbWrapper = core_kernel_classes_DbWrapper::singleton(DATABASE_NAME);
		
		$like = true;
		if(isset($options['like'])){
			$like = ($options['like'] === true);
		}

		
		$tableName = core_kernel_persistence_hardapi_Utils::getShortName($resource);
		$tablePropertiesName = core_kernel_persistence_hardapi_Utils::getPropertiesTableName($resource);
		$tableNames = array('t0' => $tableName);
		
		$conditions = array();
		foreach($propertyFilters as $propUri => $pattern){
			
			$propDesc = core_kernel_persistence_hardapi_Utils::propertyDescriptor(new core_kernel_classes_Property($propUri), true);
			$propsTabIndex = '00';
			
			if($propDesc['isMultiple']){
				
				$classPropsTabIndex = count($tableNames);
				$tableNames['t'.$classPropsTabIndex] = $tablePropertiesName;
				if(!empty($propDesc['range'])){
					$propsTabIndex = $classPropsTabIndex+1;
					$tableNames['t'.$propsTabIndex] = $propDesc['range'][0];
				}
				
				$langToken = '';
				if(isset($options['lang'])){
					if(preg_match('/^[a-zA-Z]{2,4}$/', $options['lang'])){
						$langToken = " AND ( t{$classPropsTabIndex}.l_language = '' OR t{$classPropsTabIndex}.l_language = '{$options['lang']}')";
					}
				}
				
				$condition = "";
				
				if(is_string($pattern)){
				
					if(!empty($pattern)){
						
						$searchPattern = core_kernel_persistence_hardapi_Utils::buildSearchPattern($pattern, $like);
						if(empty($propDesc['range'])){
							$condition = " ( t{$classPropsTabIndex}.property_value {$searchPattern} {$langToken})";
						}else{
							$condition = " ( t{$classPropsTabIndex}.property_foreign_id = t{$propsTabIndex}.id AND t{$propsTabIndex}.uri {$searchPattern} {$langToken})";
						}
						
					}
				}
				else if(is_array($pattern)){
					if(count($pattern) > 0){
						$multiCondition =  "(";//empty($propDesc['range'])? "( 1 AND " : "( t0.{$propDesc['name']} = t{$propsTabIndex}.id AND ";
						foreach($pattern as $i => $patternToken){
							
							if(!empty($patternToken)){
								$searchPattern = core_kernel_persistence_hardapi_Utils::buildSearchPattern($patternToken, $like);
								
								if($i > 0){
									$multiCondition .= " OR ";
								}
								if(empty($propDesc['range'])){
									$multiCondition .= " ( t{$classPropsTabIndex}.property_value {$searchPattern} {$langToken}) ";
								}else{
									$multiCondition .= " ( t{$classPropsTabIndex}.property_foreign_id = t{$propsTabIndex}.id AND t{$propsTabIndex}.uri {$searchPattern} {$langToken}) ";
								}
							}
						}
						$condition = "{$multiCondition}) ";
					}
				}
				
				if(!empty($condition)){
					$conditions[] = " ( t0.id = t{$classPropsTabIndex}.instance_id AND {$condition} )";
				}
				
			}else{
					
				$propsTabIndex = count($tableNames);
				if(!empty($propDesc['range'])) $tableNames['t'.$propsTabIndex] = $propDesc['range'][0];
				
				if(is_string($pattern)){
					if(!empty($pattern)){
						$searchPattern = core_kernel_persistence_hardapi_Utils::buildSearchPattern($pattern, $like);
						if(empty($propDesc['range'])){
							$conditions[] = " ( t0.{$propDesc['name']} {$searchPattern} )";
						}else{
							$conditions[] = " ( t0.{$propDesc['name']} = t{$propsTabIndex}.id AND t{$propsTabIndex}.uri {$searchPattern} )";
						}
						
					}
				}
				else if(is_array($pattern)){
					if(count($pattern) > 0){
						$multiCondition =  empty($propDesc['range'])? "( 1 AND " : "( t0.{$propDesc['name']} = t{$propsTabIndex}.id AND ";
						foreach($pattern as $i => $patternToken){
							
							$searchPattern = core_kernel_persistence_hardapi_Utils::buildSearchPattern($patternToken, $like);
							
							if($i > 0){
								$multiCondition .= " OR ";
							}
							$multiCondition .= empty($propDesc['range'])? " ( t0.{$propDesc['name']} {$searchPattern} ) " : " ( t{$propsTabIndex}.uri {$searchPattern} ) ";
						}
						$conditions[] = "{$multiCondition}) ";
					}
				}
				
			}
		}
		
		if(count($conditions) == 0){
			return $returnValue;
		}
		
		$sqlQuery = "SELECT `uri` FROM ";
		
		$i = 0;
		foreach($tableNames as $tableIdentifier => $tableName){
			if($i > 0){
				$sqlQuery .= ", ";
			}
			$sqlQuery .= "{$tableName} {$tableIdentifier}";
			$i++;
		}
		
		$sqlQuery .= " WHERE ";
		
		if(count($conditions) > 0){
			$intersect = true;
			if(isset($options['chaining'])){
				if($options['chaining'] == 'or'){
					$intersect = false;
				}
			}
			
			$j = 0;
			foreach($conditions as $condition){
				if($j > 0){
					$sqlQuery .= ($intersect)?' AND ':' OR ';
				}
				$sqlQuery .= $condition;
				$j++;
			}
		}
		
		var_dump($sqlQuery);exit;
		
		$sqlResult = $dbWrapper->execSql($sqlQuery);

		while (!$sqlResult->EOF){

			$instance = new core_kernel_classes_Resource($sqlResult->fields['uri']);
			$returnValue[$instance->uriResource] = $instance ;
			
			$sqlResult->MoveNext();
		}
		
		if(!isset($options['checkSubclasses']) || $options['checkSubclasses'] !== false){
			//recursive:
			//option not implemented yet
		}
        // section 10-13-1--128--26678bb4:12fbafcb344:-8000:00000000000014F0 end

        return (array) $returnValue;
    }

    /**
     * Short description of method singleton
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @return core_kernel_classes_Resource
     */
    public static function singleton()
    {
        $returnValue = null;

        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001495 begin
        
    	if (core_kernel_persistence_hardsql_Class::$instance == null){
        	core_kernel_persistence_hardsql_Class::$instance = new core_kernel_persistence_hardsql_Class();
        }
        $returnValue = core_kernel_persistence_hardsql_Class::$instance;
        
        // section 127-0-1-1--30506d9:12f6daaa255:-8000:0000000000001495 end

        return $returnValue;
    }

    /**
     * Short description of method isValidContext
     *
     * @access public
     * @author Somsack Sipasseuth, <somsack.sipasseuth@tudor.lu>
     * @param  Resource resource
     * @return boolean
     */
    public function isValidContext( core_kernel_classes_Resource $resource)
    {
        $returnValue = (bool) false;

        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F57 begin

        if (core_kernel_persistence_hardapi_ResourceReferencer::singleton()->isClassReferenced ($resource)){
			$returnValue = true;     	
        }
        
        // section 127-0-1-1--6705a05c:12f71bd9596:-8000:0000000000001F57 end

        return (bool) $returnValue;
    }

} /* end of class core_kernel_persistence_hardsql_Class */

?>