
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/operators.h"
#include "kernel/memory.h"
#include "kernel/object.h"


ZEPHIR_INIT_CLASS(Utils_Filter)
{
	ZEPHIR_REGISTER_CLASS(Utils, Filter, utils, filter, utils_filter_method_entry, 0);

	return SUCCESS;
}

PHP_METHOD(Utils_Filter, alpha)
{
	long _0;
	char ch = 0;
	zephir_method_globals *ZEPHIR_METHOD_GLOBALS_PTR = NULL;
	zval *str_param = NULL;
	zval str;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&str);
#if PHP_VERSION_ID >= 80000
	bool is_null_true = 1;
	ZEND_PARSE_PARAMETERS_START(1, 1)
		Z_PARAM_STR(str)
	ZEND_PARSE_PARAMETERS_END();
#endif


	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &str_param);
	zephir_get_strval(&str, str_param);


	for (_0 = 0; _0 < Z_STRLEN_P(&str); _0++) {
		ch = ZEPHIR_STRING_OFFSET(&str, _0);
		php_printf("%c", ch);
		php_printf("%s", "<br>");
	}
	ZEPHIR_MM_RESTORE();
}

