
extern zend_class_entry *utils_filter_ce;

ZEPHIR_INIT_CLASS(Utils_Filter);

PHP_METHOD(Utils_Filter, alpha);

ZEND_BEGIN_ARG_INFO_EX(arginfo_utils_filter_alpha, 0, 0, 1)
	ZEND_ARG_TYPE_INFO(0, str, IS_STRING, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(utils_filter_method_entry) {
	PHP_ME(Utils_Filter, alpha, arginfo_utils_filter_alpha, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
