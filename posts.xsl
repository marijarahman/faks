<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<html>
			<body>
			<xsl:for-each select="blog/post">
					<div style="padding:15px; font-weight: bold; font-size: 1.2em">
						<span>Heading: <xsl:value-of select="heading"/></span>
					</div>
					<div style="padding: 15px; font-style: oblique;">
						<span>
							Date: <xsl:value-of select="date/day"/>. <xsl:value-of select="date/month"/>. <xsl:value-of select="date/year"/>
						</span>
					</div>
					<div style="padding: 15px;">
						<span>
							Content: <xsl:value-of select="text"/>
						</span>
					</div>
				</xsl:for-each>
			</body>
		</html>
	</xsl:template>
</xsl:stylesheet>