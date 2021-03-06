module.exports = {
  'extends': 'stylelint-config-standard',
  'rules': {
    'rule-empty-line-before': null,
    'at-rule-empty-line-before': null,
    'no-empty-source': null,
    'string-quotes': 'double',
    "no-descending-specificity": null,
    'at-rule-no-unknown': [
      true,
      {
        'ignoreAtRules': [
          'extend',
          'at-root',
          'debug',
          'warn',
          'error',
          'if',
          'else',
          'for',
          'each',
          'while',
          'mixin',
          'no-missing-end-of-source-newline',
          'include',
          'content',
          'return',
          'function',
          'tailwind',
          'apply',
          'responsive',
          'variants',
          'screen',
          'rule-empty-line-before',
        ],
      },
    ],
  },
};
