<?php

declare (strict_types=1);
namespace RectorPrefix202412;

use Rector\Config\RectorConfig;
use Rector\PHPUnit\PHPUnit60\Rector\ClassMethod\AddDoesNotPerformAssertionToNonAssertingTestRector;
use Rector\PHPUnit\PHPUnit60\Rector\ClassMethod\ExceptionAnnotationRector;
use Rector\PHPUnit\PHPUnit60\Rector\MethodCall\DelegateExceptionArgumentsRector;
use Rector\PHPUnit\PHPUnit60\Rector\MethodCall\GetMockBuilderGetMockToCreateMockRector;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\MethodCallRename;
return static function (RectorConfig $rectorConfig) : void {
    // handles 2nd and 3rd argument of setExpectedException
    $rectorConfig->rules([DelegateExceptionArgumentsRector::class, ExceptionAnnotationRector::class, AddDoesNotPerformAssertionToNonAssertingTestRector::class, GetMockBuilderGetMockToCreateMockRector::class]);
    $rectorConfig->ruleWithConfiguration(RenameMethodRector::class, [new MethodCallRename('PHPUnit\\Framework\\TestClass', 'setExpectedException', 'expectedException'), new MethodCallRename('PHPUnit\\Framework\\TestClass', 'setExpectedExceptionRegExp', 'expectedException'), new MethodCallRename('PHPUnit\\Framework\\TestCase', 'createMockBuilder', 'getMockBuilder')]);
    $rectorConfig->ruleWithConfiguration(RenameClassRector::class, [
        // ref. https://github.com/sebastianbergmann/phpunit/compare/5.7.9...6.0.0
        'PHPUnit_Framework_MockObject_Stub' => 'PHPUnit\\Framework\\MockObject\\Stub',
        'PHPUnit_Framework_MockObject_Stub_Return' => 'PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub',
        'PHPUnit_Framework_MockObject_Matcher_Parameters' => 'PHPUnit\\Framework\\MockObject\\Matcher\\Parameters',
        'PHPUnit_Framework_MockObject_Matcher_Invocation' => 'PHPUnit\\Framework\\MockObject\\Matcher\\Invocation',
        'PHPUnit_Framework_MockObject_MockObject' => 'PHPUnit\\Framework\\MockObject\\MockObject',
        'PHPUnit_Framework_MockObject_Invocation_Object' => 'PHPUnit\\Framework\\MockObject\\Invocation\\ObjectInvocation',
        'PHPUnit_Framework_Assert' => 'PHPUnit\\Framework\\Assert',
        'PHPUnit_Framework_AssertionFailedError' => 'PHPUnit\\Framework\\AssertionFailedError',
        'PHPUnit_Framework_BaseTestListener' => 'PHPUnit\\Framework\\BaseTestListener',
        'PHPUnit_Framework_CodeCoverageException' => 'PHPUnit\\Framework\\CodeCoverageException',
        'PHPUnit_Exception' => 'PHPUnit\\Exception',
        'PHPUnit_Framework_Exception' => 'PHPUnit\\Framework\\Exception',
        'PHPUnit_Framework_ExceptionWrapper' => 'PHPUnit\\Framework\\ExceptionWrapper',
        'PHPUnit_Framework_ExpectationFailedException' => 'PHPUnit\\Framework\\ExpectationFailedException',
        'PHPUnit_Framework_IncompleteTest' => 'PHPUnit\\Framework\\IncompleteTest',
        'PHPUnit_Framework_IncompleteTestCase' => 'PHPUnit\\Framework\\IncompleteTestCase',
        'PHPUnit_Framework_IncompleteTestError' => 'PHPUnit\\Framework\\IncompleteTestError',
        'PHPUnit_Framework_InvalidCoversTargetException' => 'PHPUnit\\Framework\\InvalidCoversTargetException',
        'PHPUnit_Framework_OutputError' => 'PHPUnit\\Framework\\OutputError',
        'PHPUnit_Framework_CoveredCodeNotExecutedException' => 'PHPUnit\\Framework\\CoveredCodeNotExecutedException',
        'PHPUnit_Framework_MissingCoversAnnotationException' => 'PHPUnit\\Framework\\MissingCoversAnnotationException',
        'PHPUnit_Framework_RiskyTest' => 'PHPUnit\\Framework\\RiskyTest',
        'PHPUnit_Framework_RiskyTestError' => 'PHPUnit\\Framework\\RiskyTestError',
        'PHPUnit_Framework_SkippedTest' => 'PHPUnit\\Framework\\SkippedTest',
        'PHPUnit_Framework_SkippedTestCase' => 'PHPUnit\\Framework\\SkippedTestCase',
        'PHPUnit_Framework_SkippedTestError' => 'PHPUnit\\Framework\\SkippedTestError',
        'PHPUnit_Framework_SkippedTestSuiteError' => 'PHPUnit\\Framework\\SkippedTestSuiteError',
        'PHPUnit_Framework_SyntheticError' => 'PHPUnit\\Framework\\SyntheticError',
        'PHPUnit_Framework_Test' => 'PHPUnit\\Framework\\Test',
        'PHPUnit_Framework_TestCase' => 'PHPUnit\\Framework\\TestCase',
        'PHPUnit_Framework_TestFailure' => 'PHPUnit\\Framework\\TestFailure',
        'PHPUnit_Framework_TestListener' => 'PHPUnit\\Framework\\TestListener',
        'PHPUnit_Framework_TestResult' => 'PHPUnit\\Framework\\TestResult',
        'PHPUnit_Framework_TestSuite' => 'PHPUnit\\Framework\\TestSuite',
        'PHPUnit_Framework_UnintentionallyCoveredCodeError' => 'PHPUnit\\Framework\\UnintentionallyCoveredCodeError',
        'PHPUnit_Framework_Warning' => 'PHPUnit\\Framework\\Warning',
        'PHPUnit_Framework_WarningTestCase' => 'PHPUnit\\Framework\\WarningTestCase',
        'PHPUnit_Framework_Constraint_And' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
        'PHPUnit_Framework_Constraint_ArrayHasKey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
        'PHPUnit_Framework_Constraint_ArraySubset' => 'PHPUnit\\Framework\\Constraint\\ArraySubset',
        'PHPUnit_Framework_Constraint_Attribute' => 'PHPUnit\\Framework\\Constraint\\Attribute',
        'PHPUnit_Framework_Constraint_Callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
        'PHPUnit_Framework_Constraint_ClassHasAttribute' => 'PHPUnit\\Framework\\Constraint\\ClassHasAttribute',
        'PHPUnit_Framework_Constraint_Composite' => 'PHPUnit\\Framework\\Constraint\\Composite',
        'PHPUnit_Framework_Constraint_Count' => 'PHPUnit\\Framework\\Constraint\\Count',
        'PHPUnit_Framework_Constraint_DirectoryExists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
        'PHPUnit_Framework_Constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
        'PHPUnit_Framework_Constraint_Exception' => 'PHPUnit\\Framework\\Constraint\\Exception',
        'PHPUnit_Framework_Constraint_ExceptionCode' => 'PHPUnit\\Framework\\Constraint\\ExceptionCode',
        'PHPUnit_Framework_Constraint_ExceptionMessage' => 'PHPUnit\\Framework\\Constraint\\ExceptionMessage',
        'PHPUnit_Framework_Constraint_ExceptionMessageRegExp' => 'PHPUnit_Framework_Constraint_ExceptionMessageRegularExpression',
        'PHPUnit_Framework_Constraint_FileExists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
        'PHPUnit_Framework_Constraint_GreaterThan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
        'PHPUnit_Framework_Constraint_IsAnything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
        'PHPUnit_Framework_Constraint_IsEmpty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
        'PHPUnit_Framework_Constraint_IsIdentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
        'PHPUnit_Framework_Constraint_IsInfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
        'PHPUnit_Framework_Constraint_IsInstanceOf' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
        'PHPUnit_Framework_Constraint_IsJson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
        'PHPUnit_Framework_Constraint_IsNan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
        'PHPUnit_Framework_Constraint_IsNull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
        'PHPUnit_Framework_Constraint_IsReadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
        'PHPUnit_Framework_Constraint_IsTrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
        'PHPUnit_Framework_Constraint_IsType' => 'PHPUnit\\Framework\\Constraint\\IsType',
        'PHPUnit_Framework_Constraint_IsWritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
        'PHPUnit_Framework_Constraint_JsonMatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
        'PHPUnit_Framework_Constraint_LessThan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
        'PHPUnit_Framework_Constraint_Not' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
        'PHPUnit_Framework_Constraint_ObjectHasAttribute' => 'PHPUnit\\Framework\\Constraint\\ObjectHasAttribute',
        'PHPUnit_Framework_Constraint_Or' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
        'PHPUnit_Framework_Constraint_PCREMatch' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
        'PHPUnit_Framework_Constraint_SameSize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
        'PHPUnit_Framework_Constraint_StringContains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
        'PHPUnit_Framework_Constraint_StringEndsWith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
        'PHPUnit_Framework_Constraint_StringMatches' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
        'PHPUnit_Framework_Constraint_StringStartsWith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
        'PHPUnit_Framework_Constraint_TraversableContains' => 'PHPUnit\\Framework\\Constraint\\TraversableContains',
        'PHPUnit_Framework_Constraint_TraversableContainsOnly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
        'PHPUnit_Framework_Constraint_Xor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
        'PHPUnit_Framework_Constraint_JsonMatches_ErrorMessageProvider' => 'PHPUnit\\Framework\\Constraint\\JsonMatchesErrorMessageProvider',
        'PHPUnit_Framework_Error_Deprecated' => 'PHPUnit\\Framework\\Error\\Deprecated',
        'PHPUnit_Framework_Error_Notice' => 'PHPUnit\\Framework\\Error\\Notice',
        'PHPUnit_Framework_Error_Warning' => 'PHPUnit\\Framework\\Error\\Warning',
        'PHPUnit_Framework_TestSuite_DataProvider' => 'PHPUnit\\Framework\\DataProviderTestSuite',
        'PHPUnit_Framework_Error' => 'PHPUnit\\Framework\\Error\\Error',
        'PHPUnit_Runner_BaseTestRunner' => 'PHPUnit\\Runner\\BaseTestRunner',
        'PHPUnit_Runner_Exception' => 'PHPUnit\\Runner\\Exception',
        'PHPUnit_Runner_PhptTestCase' => 'PHPUnit\\Runner\\PhptTestCase',
        'PHPUnit_Runner_StandardTestSuiteLoader' => 'PHPUnit\\Runner\\StandardTestSuiteLoader',
        'PHPUnit_Runner_TestSuiteLoader' => 'PHPUnit\\Runner\\TestSuiteLoader',
        'PHPUnit_Runner_Version' => 'PHPUnit\\Runner\\Version',
        'PHPUnit_Runner_Filter_Factory' => 'PHPUnit\\Runner\\Filter\\Factory',
        'PHPUnit_Runner_Filter_GroupFilterIterator' => 'PHPUnit\\Runner\\Filter\\GroupFilterIterator',
        'PHPUnit_Runner_Filter_Test' => 'PHPUnit\\Runner\\Filter\\NameFilterIterator',
        'PHPUnit_Runner_Filter_Group_Exclude' => 'PHPUnit\\Runner\\Filter\\ExcludeGroupFilterIterator',
        'PHPUnit_Runner_Filter_Group_Include' => 'PHPUnit\\Runner\\Filter\\IncludeGroupFilterIterator',
        'PHPUnit_TextUI_Command' => 'PHPUnit\\TextUI\\Command',
        'PHPUnit_TextUI_ResultPrinter' => 'PHPUnit\\TextUI\\ResultPrinter',
        'PHPUnit_TextUI_TestRunner' => 'PHPUnit\\TextUI\\TestRunner',
        'PHPUnit_Util_Blacklist' => 'PHPUnit\\Util\\Blacklist',
        'PHPUnit_Util_Configuration' => 'PHPUnit\\Util\\Configuration',
        'PHPUnit_Util_ConfigurationGenerator' => 'PHPUnit\\Util\\ConfigurationGenerator',
        'PHPUnit_Util_ErrorHandler' => 'PHPUnit\\Util\\ErrorHandler',
        'PHPUnit_Util_Fileloader' => 'PHPUnit\\Util\\Fileloader',
        'PHPUnit_Util_Filesystem' => 'PHPUnit\\Util\\Filesystem',
        'PHPUnit_Util_Filter' => 'PHPUnit\\Util\\Filter',
        'PHPUnit_Util_Getopt' => 'PHPUnit\\Util\\Getopt',
        'PHPUnit_Util_GlobalState' => 'PHPUnit\\Util\\GlobalState',
        'PHPUnit_Util_InvalidArgumentHelper' => 'PHPUnit\\Util\\InvalidArgumentHelper',
        'PHPUnit_Util_PHP' => 'PHPUnit\\Util\\PHP\\AbstractPhpProcess',
        'PHPUnit_Util_PHP_Default' => 'PHPUnit\\Util\\PHP\\DefaultPhpProcess',
        'PHPUnit_Util_PHP_Windows' => 'PHPUnit\\Util\\PHP\\WindowsPhpProcesPhpProcess',
        'PHPUnit_Util_Log_JUnit' => 'PHPUnit\\Util\\Log\\JUnit',
        'PHPUnit_Util_Log_TeamCity' => 'PHPUnit\\Util\\Log\\TeamCity',
        'PHPUnit_Util_TestDox_NamePrettifier' => 'PHPUnit\\Util\\TestDox\\NamePrettifier',
        'PHPUnit_Util_TestDox_ResultPrinter' => 'PHPUnit\\Util\\TestDox\\ResultPrinter',
        'PHPUnit_Util_TestDox_ResultPrinter_HTML' => 'PHPUnit\\Util\\TestDox\\HtmlResultPrinter',
        'PHPUnit_Util_TestDox_ResultPrinter_Text' => 'PHPUnit\\Util\\TestDox\\TextResultPrinter',
        'PHPUnit_Util_TestDox_ResultPrinter_XML' => 'PHPUnit\\Util\\TestDox\\XmlResultPrinter',
        'PHPUnit_Util_Printer' => 'PHPUnit\\Util\\Printer',
        'PHPUnit_Util_Regex' => 'PHPUnit\\Util\\RegularExpression',
        'PHPUnit_Util_String' => 'PHPUnit\\Util\\Utf8',
        'PHPUnit_Util_XML' => 'PHPUnit\\Util\\XML',
        'PHPUnit_Util_TestSuiteIterator' => 'PHPUnit\\Framework\\TestSuiteIterator',
        'PHPUnit_Util_Type' => 'PHPUnit\\Util\\Type',
        'PHPUnit_Util_Test' => 'PHPUnit\\Util\\Test',
    ]);
};
