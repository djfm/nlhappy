DROP TABLE IF EXISTS `ArticleLanguage`;

CREATE TABLE IF NOT EXISTS `ArticleLanguage` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `article_id` INT NOT NULL,
  `language_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `article_language_unique_idx` (`article_id`, `language_id`),
  CONSTRAINT `fk_article_language_article`
  	FOREIGN KEY (`article_id`) REFERENCES `NewsletterArticle` (`id`)
  	ON DELETE CASCADE
  	ON UPDATE NO ACTION, 
  CONSTRAINT `fk_article_language_language`
  	FOREIGN KEY (`language_id`) REFERENCES `Language` (`id`)
  	ON DELETE CASCADE
  	ON UPDATE NO ACTION 
)
ENGINE = InnoDB;

INSERT INTO `ArticleLanguage` (`article_id`, `language_id`)
SELECT na.id, l.id
FROM
`NewsletterArticle` na 
INNER JOIN `NewsletterLanguage` nl
ON nl.id = na.newsletter_language_id
INNER JOIN `Language` l
ON l.id = nl.language_id